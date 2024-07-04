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
        <li class="links active" onclick="openModal()">
          <span>Add New Staff</span>
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

  <div id="popup1" class="overlay hidden">
  <div class="popup">
           <button class="btn_submit" id="generateStaffId">Edit Staff Information</button>
           <button class="btn_submit" id="generateStaffId">Check Staff Profile</button>
           <button class="btn_submit" id="generateStaffId">Print Staff Payroll</button>
  </div>
</div>

  <!-- <div class="success alert">
    <div class="content">
      <div class="icon">
      <i class="bi bi-check-circle-fill bootsrapIcon"></i>
    </div>
      <h2>A Success Message</h2>
    </div>
  </div>
  <div class="info alert">
    <div class="content">
      <div class="icon">
      <i class="bi bi-info-circle-fill bootsrapIcon"></i>
    </div>
      <h2>A Success Message</h2>
    </div>
  </div>
  <div class="warning alert">
    <div class="content">
      <div class="icon">
      <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
    </div>
      <h2>A Success Message</h2>
    </div>
  </div>
  <div class="danger alert">
    <div class="content">
      <div class="icon">
      <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
    </div>
      <h2>A Success Message</h2>
    </div>
  </div> -->
  


  <div class="list_div" id="staffList">
    <div class="table_container">
            <div class="search_bar_container">
            <h2 class="modal__header">
        Staff 
      <span class="highlight">Registration</span>
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
                        <td>Position</td>
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


  <div class="modal hidden">
      <button class="btn--close-modal" onclick="closeModal()">&times;</button>
      <h2 class="modal__header">
        Staff 
      <span class="highlight">Registration</span>
      </h2>
      <form class="modal__form" id="staffFormInput">
        <h3>Personal Infomation</h3>
        <div class="each_sections">
          <div class="form-control">
          <label for="staffName">Full Name</label>
          <input type="text" name="staffName" id="staffName">
          </div>
          <div class="form-control">
          <label>Date of Birth</label>
          <input type="date" name="" id="">
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
          <input type="text" name="" id="">
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
             <input type="text" name="" id="">
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
             <select name="" id="">
              <option value="">Full-time</option>
              <option value="">Part-time</option>
              <option value="">Contract</option>
              <option value="">Temporary</option>
             </select>
          </div>
          <div class="form-control">
            <label for="">Date of Hire</label>
             <input type="date" name="" id="">
          </div>
        </div>
        <h3>Professional Information</h3>
        <div class="each_sections">
        <div class="form-control">
            <label for="">Qualifications</label>
             <input type="file" name="" id="">
          </div>
        <div class="form-control">
            <label for="">Certifications/Licenses</label>
             <input type="file" name="" id="">
          </div>
        <div class="form-control">
            <label for="">Resume/C.V.</label>
             <input type="file" name="" id="">
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
             <input type="text" name="" id="" placeholder="Bank Name">
             <input type="text" name="" id="" placeholder="Account Number">
             <input type="text" name="" id="" placeholder="Account Name">
          </div>
        </div>
        <!-- <h3>System Access Information</h3>
        <div class="each_sections">
        <div class="form-control">
            <label for="">Username</label>
             <input type="text" name="" id="">
          </div>
        <div class="form-control">
            <label for="">Password</label>
             <input type="text" name="" id="">
          </div>
        <div class="form-control">
            <label for="">ID</label>
             <input type="text" name="" id="">
          </div>
          <div class="form-control">
            <label for="">Role-Based Access Level</label>
             <select name="" id="">
              <option value="">Admin</option>
              <option value="">HR Manager</option>
              <option value="">Department Head</option>
              <option value="">Staff Member</option>
             </select>
          </div>
          </div> -->
        <button type="button" class="btn_submit" onclick="registerStaff()">Submit &rarr;</button>
      </form>
    </div>
    <div class="overlay hidden"></div>


        <script src="index.js"></script>
</body>
</html>