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
        <li onclick="document.getElementById('logoutform').submit();" id="logout_link" class="links">
          <span>Logout</span>
          <form method="post" action="../config/code.php" id="logoutform">
            <input type="hidden" name="action" value="logout"/>
          </form>
        </li>
      </ul>
    </div>
  </div>

  <!-- <div class="userInfo">
                  <ul class="userList">
                    <li id="personalDetailsTab">Personal Information</li>
                    <li id="employmentDetailsTab">Employment Details</li>
                    <li id="professionalInfoTab">Professional Information</li>
                    <li id="payrollInfoTab">Payroll Info</li>
                  </ul>
                </div>
                <div id="personalDetails" class="hide">
                  <h3>Gender: Female</h3>
                  <h3>Date of Birth: 23/07/1994</h3>
                  <h3>Home Resident: London Road California</h3>
                  <h3>Phone number: 442203323</h3>
                  <h3>Email: miriam@gmail.com</h3>
                </div>
                <div id="employmentDetails" class="hide">
                  <h3>Surgeon</h3>
                  <h3>Dpt Head</h3>
                  <h3>Full time</h3>
                  <h3>Hired 27/7/2023</h3>
                </div>
                <div id="professionalInfo" class="hide">
                  <h3>Qualification(pdf) <i class="bi bi-download"></i></h3>
                  <h3>Certification/Licenses <i class="bi bi-download"></i></h3>
                  <h3>Resume/C.V <i class="bi bi-download"></i></h3>
                  <h3>Salary - $300</h3>
                </div>
                <div id="payrollInfo" class="hide">
                  <h3>UBA</h3>
                  <h3>3383323892</h3>
                  <h3>Miriam Cleneen</h3>
                </div>
              </div> -->
 
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
             <select name="" id="">
              <option value="">Full-time</option>
              <option value="">Part-time</option>
              <option value="">Contract</option>
              <option value="">Temporary</option>
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
             <input type="file" name="qualification" id="qualification">
          </div>
        <div class="form-control">
            <label for="">Certifications/Licenses</label>
             <input type="file" name="cerification/licenses" id="cerification/licenses">
          </div>
        <div class="form-control">
            <label for="">Resume/C.V.</label>
             <input type="file" name="resume" id="resume">
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
        <button type="button" class="btn_submit" onclick="registerStaff()">Submit &rarr;</button>
      </form>
    </div>
    <div class="black_blur hidden"></div>
        <script src="index.js"></script>
</body>
</html>