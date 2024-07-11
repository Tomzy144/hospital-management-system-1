<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management</title>
    <link rel="stylesheet" href="index.css"> 
    <link rel="stylesheet" href="awesome-font/css/font/bootstrap-icons.css">
    <link rel="stylesheet" href="awesome-font/css/animate.css">
</head>
<body>

    <div class="navbar">
        <div class="display__date">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <span>Doc. Henculus White</span>
            <button class="btn_submit">Upload Image</button>
           </div>

            <div class="image">
            <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="userImage"/>
            <div class="active_on"></div>
            </div>
            <span>Doc. Henculus White</span>
            <i class="bi bi-caret-down-fill" onclick="displayUserProfile()"></i>
                 </div>
                </div>

    <div class="sidebar">
    <div class="sidebar__header"></div>
    <div class="sidebar-body">
      <ul>
        <li class="links active" onclick="openModal('staffForm')">
          <span>Add New Staff</span>
        </li>
        <li class="links" onclick="openModal('staffTracking')">
          <span>Attendance Tracking</span>
        </li>
        <li onclick="document.getElementById('logoutform').submit();" id="logout_link" class="links">
          <span>Logout</span>
          <form method="post" action="../config/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>
          </form>
        </li>
      </ul>
    </div>
  </div>

  <div class="modal hidden" id="staffTracking">
  <button class="btn--close-modal" onclick="closeModal('staffTracking')">&times;</button>
      <h2 class="modal__header">
        Staff 
      <span class="highlight">time and attendance</span>
      </h2>
      <div class="clockinoutDiv">
      <button type="button" class="btn_submit" onclick="showClockInModal()">Clock In &rarr;</button>
      <button type="button" class="btn_submit" onclick="showClockOutModal()">Clock Out &rarr;</button>
      </div>
  </div>

  <div class="modal hidden" id="clockInForm">
        <h2 class="modal__header">
        Clock 
      <span class="highlight">in</span>
      </h2>
        <label for="clockInStaffId">Staff Id</label>
        <input type="text" id="clockInStaffId" placeholder="Enter Staff ID" required>
        <button type="button" class="btn_submit" id="clockInButton">Authenticate <i class="bi bi-fingerprint"></i> </button>
    </div>
  <div class="modal hidden" id="clockOutForm">
        <h2 class="modal__header">
        Clock 
      <span class="highlight">out</span>
      </h2>

        <label for="clockOutStaffId">Staff Id</label>
        <input type="text" id="clockOutStaffId" placeholder="Enter Staff ID" required>
        <button type="button" class="btn_submit" id="clockOutButton">Clock Out &rarr;</button>
    </div>

  <div class="modal hidden" id="fingerPrint">
        <i class="bi bi-fingerprint"></i>
    </div>

 
  <div class="modal hidden" id="staffInfo">
      <div class="table_container">
            <div class="search_bar_container">
            <h2 class="modal__header">
        Staff 
      <span class="highlight">Profile</span>
      </h2>
            </div>
            <table id="staffData">
                <thead>
                    <tr>
                        <td>Personal Infomation</td>
                        <td>Employment Detail</td>
                        <td>Professional Information</td>
                        <td>Payroll Info</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
        </table>
  </div>

</div>
  


<!---ACTIVE STAFF--->
<div class="list_div hide" id="clockinStaff">
      <div class="table_container">
            <div class="search_bar_container">
            <h2 class="modal__header">
        Staff 
      <span class="highlight">attendance tracking</span>
      </h2>
            </div>
            <table id="clockinStaffs">
                <thead>
                    <tr>
                        <td>Profile</td>
                        <td>StaffName</td>
                        <td>Staff Id</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
        </table>
  </div>

</div>
  




  <div class="list_div" id="staffList">
    <div class="table_container">
            <div class="search_bar_container">
            <h2 class="modal__header">
        Staff 
      <span class="highlight">List</span>
      </h2>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="staffList">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Profile</td>
                        <td>Name</td>
                        <td>Staff Id</td>
                        <td>Gender</td>
                        <td>Staff Email</td>
                        <td>Role</td>
                        <td>Department</td>
                        <td>Status</td>
                        <td>Duty Status</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
        </table>
  </div>
  </div>


  <div class="modal hidden" id="staffForm">
      <button class="btn--close-modal" onclick="closeModal('staffForm')">&times;</button>
      <h2 class="modal__header">
        Staff 
      <span class="highlight">Registration</span>
      </h2>
      <form class="modal__form" id="staffFormInput">
        <div class="passport">
          <video src="" id="passportVideo" width="400" height="300" autoplay></video>
          <i class="bi bi-plus" id="openCamera"></i>
          <canvas id="canvasPassport" style="display: none"></canvas>
          <img src="" alt="staff image" id="capturedPassport" style="display: none">
        </div>
        <div class="capture__div hide">
        <button type="button" id="captureImage" class="btn_submit">Capture Staff</button>
        <button type="button" id="recaptureImage" class="btn_submit">Recapture Staff</button>
        </div>
       
        <h3>Personal Infomation</h3>
        <div class="each_sections">
          <div class="form-control">
          <label for="staffName">Full Name</label>
          <input type="text" name="staffName" id="staffName">
          </div>
          <div class="form-control">
          <label>Date of Birth</label>
          <input type="date" name="dob" id="dob">
          </div>
          <div class="form-control">
          <label for="gender">Gender</label>
                    <div class="radio-group">
              <label>
                  Male
                  <input type="radio" name="gender" value="male" id="maleCheckbox">
                  <span class="custom-radio"></span>
              </label>
              <label>
                  Female
                  <input type="radio" name="gender" value="female" id="femaleCheckbox">
                  <span class="custom-radio"></span>
              </label>
            </div>
          </div>
          <div class="form-control">
          <label>Address</label>
          <input type="text" name="address" id="address">
          </div>
          <div class="form-control">
          <label for="staffPhoneNumber">Phone Number</label>
          <input type="text" name="staffPhoneNumber" id="staffPhoneNumber">
          </div>
          <div class="form-control">
          <label for="staffEmail">Email Address</label>
          <input type="email" name="staffEmail" id="staffEmail">
          </div>
        </div>

        <h3>Employment Details</h3>
        <div class="each_sections">
          <div class="form-control">
            <label for="">Employee ID</label>
             <input type="text" name="employmentId" id="employmentId">
          </div>
          <div class="form-control">
            <label for="jobPosition">Position/Job Title</label>
             <input type="text" name="jobPosition" id="jobPosition">
          </div>
          <div class="form-control">
            <label for="staffDepartment">Department</label>
             <input type="text" name="staffDepartment" id="staffDepartment">
          </div>
          <div class="form-control">
            <label for="">Employment Type</label>
             <select name="employmentType" id="employmentType">
              <option value="Full-time">Full-time</option>
              <option value="part-time">Part-time</option>
              <option value="contract">Contract</option>
              <option value="temporary">Temporary</option>
             </select>
          </div>
          <div class="form-control">
            <label for="">Date of Hire</label>
             <input type="date" name="doh" id="doh">
          </div>
          <div class="form-control">
            <label for="staffStatus">Staff Status</label>
             <input type="text" name="staffStatus" id="staffStatus">
          </div>
        </div>
        <h3>Professional Information</h3>
        <div class="each_sections">
        <div class="form-control">
            <label for="">Qualifications</label>
             <input type="file" name="qualification" id="qualification" accept="application/pdf">
          </div>
        <div class="form-control">
            <label for="">Certifications/Licenses</label>
             <input type="file" name="cerification/licenses" id="cerification" accept="application/pdf">
          </div>
        <div class="form-control">
            <label for="">Resume/C.V.</label>
             <input type="file" name="resume" id="resume" accept="application/pdf">
          </div>
        </div>
        <h3>Payroll Information</h3>
        <div class="each_sections">
        <div class="form-control">
            <label for="">Salary/Hourly Rate</label>
             <select name="" id="">
              <option value="">$3000/hrs</option>
              <option value="">$5000/hrs</option>
              <option value="">$13000/hrs</option>
             </select>
          </div>
        <div class="form-control">
            <label for="">Bank Account Details for Direct Deposit</label>
             <input type="text" name="bankName" id="bankName" placeholder="Bank Name">
             <input type="text" name="bankAccountNumber" id="bankAccountNumber" placeholder="Account Number">
             <input type="text" name="AccountName" id="AccountName" placeholder="Account Name">
          </div>
        </div>
        <button type="button" class="btn_submit" id="registerStaff">Submit &rarr;</button>
      </form>
    </div>
    <div class="black_blur hidden"></div>
        <script src="index.js"></script>
</body>
</html>