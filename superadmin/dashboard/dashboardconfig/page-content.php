<?php if($page=='overview'){?>
  <section class="overview login-div" id="next_1">
    <div class="inner-div">
        <div class="cards" onclick="fetch_patients();">
            <span>Information and Health Records</span><br>
            <p>Total Patients: <span id="total_patients"></span></p>
            <canvas id="patientsChart"></canvas>
        </div>
        <div class="cards">
            <span>Total Staffs</span>
            <p>Total Staffs: <span id="total_staff"></span></p>
            <canvas id="staffsChart"></canvas>
        </div>
        <div class="cards">
            <span>Monthly Income</span>
            <canvas id="incomeChart"></canvas>
        </div>
        <div class="cards">
            <span>Pharmacy Sales</span>
            <canvas id="pharmacyChart"></canvas>
        </div>
        <div class="cards">
            <span>Surgery</span>
            <canvas id="surgery_rate"></canvas>
        </div>
        <div class="cards">
            <span>Radiology Appointments</span>
            <canvas id="radiology_appointments"></canvas>
        </div>
        <div class="cards">
            <span>Laboratory Appointments</span>
            <canvas id="labouratory_appointments"></canvas>
        </div>
        <div class="cards">
            <span>Maternity</span>
            <canvas id="matanityChart"></canvas>
        </div>
        <div class="cards">
            <span>Morgue</span>
            <canvas id="MorgueChart"></canvas>
        </div>
    </div>
</section>

<section class="patients_info login-div" id="next_2">
    <div class="inner-div">
        <h2>Patients Information</h2>
        <p>Use the sidebar to fetch patient details dynamically.</p>
        <div id="patient_records"></div>
    </div>
</section>

<?php }?>