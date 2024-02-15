<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morgue</title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div id="navbar-container"></div>
<div id="all_section_container">
<div class="appoitment_section">
<div class="appiontment_booking_container">
<div class="appiontment">
<div class="head_sec">
  <span>Incoming Deceassed</span>
  <div class="appoitment_input_control">
  <i class="fa fa-search" id="search_icon"></i>
      <input type="text" placeholder="Search here" class="appoitment_input">
  </div>
</div>
<div class="table_container">
<table id="appoitment_table">
  <thead>
    <td>Number</td>
    <td>Patient Name/Patient Id</td>
    <td>Date/Time</td>
    <td>Request Type</td>
    <td>Accept</td>
    <td>Reject</td>
  </thead>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button onClick="show_radiology_input()">Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
   
</table>
</div>
<div class="pending_transaction_list_pagination">
        <div class="flexs">
            <p id="prev_appoitment">Prev List</p>
            <p id="next_appoitment">Next List</p>
        </div>
</div>
</div>
</div>

<div class="approved_appoitment">
<div class="head_sec">
  <span>List of Deceassed</span>
  <div class="appoitment_input_control">
  <i class="fa fa-search" id="search_icon"></i>
      <input type="text" placeholder="Search here" class="appoitment_input">
  </div>
</div>
<div class="table_container">
<table id="approved_table">
  <thead>
    <td>Number</td>
    <td>Patient Name</td>
    <td>Patient Id</td>
  </thead>
  <tbody>

  </tbody>
  </table>
</div>

<div class="radiology_pagination">
        <div class="flexs">
            <p id="prev_approved_appoitment">Prev List</p>
            <p id="next_approved_appoitment">Next List</p>
        </div>
</div>
</div>
</div>
<div class="admission_form_container hide">
        <div class="deceased_admission_form">
            <div class="deceased_form">
                <span>Deceased Admission form</span>
                <form action="">
                    <div class="form_control">
                        <label for="">Deceased Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Date of Birth</label>
                        <input type="date" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Date of Admission</label>
                        <input type="date" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Date of Death</label>
                        <input type="date" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Age at time of Death</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Gender</label>
                        <div class="gender">
                        <label for="">Male</label>
                        <input type="checkbox" name="" id="">
                    <label for="">Female</label>
                    <input type="checkbox" name="" id="">
                    </div>
                    </div>
                    <div class="form_control">
                    <label for="">Place of Death</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Was an autopsy perfomed</label>
                        <div class="gender">
                        <label for="">Yes</label>
                        <input type="checkbox" name="" id="autopsy_yes">
                    <label for="">No</label>
                    <input type="checkbox" name="" id="autopsy_no">
                    </div>
                    <div class="autopsy_message hide">
                        <label for="">Message</label>
                  <textarea class=" " name="" id="" cols="30" rows="10"></textarea>
                  </div>
                    </div>
                    <div class="form_control">
                    <label for="">Cause of death</label>
                       <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form_control">
                    <label for="">Duration of Illness</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                    <label for="">Deposit</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                    <label for="">Morgue Plan</label>
                    <select name="" id="">
                        <option value="">Preservative</option>
                        <option value="">Storage</option>
                    </select>
                    </div>
                    <div class="form_control">
                    <label for="">Upload Death Certificate</label>
                    <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                    <label for="">Upload Police Report (In a cese of Armed robbery, bullet wound, stabbed wound that lead to death) </label>
                    <input type="file" name="" id="">
                    </div>
                    <button>Book</button>
                </form>
            </div>
        </div>
        <div class="deceased_relative_admission_form">
            <div class="relative_admission">
            <div class="relative_form">
                <span>Relative form</span>
                <form action="">
                    <div class="form_control">
                        <label for="">Relative Name</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Relationship with deceased</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Phone Number</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Mental Status</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Occupation</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Gender</label>
                        <div class="gender">
                        <label for="">Male</label>
                        <input type="checkbox" name="" id="">
                    <label for="">Female</label>
                    <input type="checkbox" name="" id="">
                    </div>
                    </div>
                    <div class="form_control">
                    <label for="">Religion</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                    <label for="">Deceased ID</label>
                    <input type="text" name="" id="">
                    </div>
                    <div class="form_control">
                    <label for="">Upload ID</label>
                    <input type="file" name="" id="">
                    </div>
                    <div class="form_control">
                        <label for="">Are they any specific arrangement regarding the relative affairs or funeral arrangement</label>
                        <div class="gender">
                        <label for="">Yes</label>
                        <input type="checkbox" name="" id="arr_yes">
                    <label for="">No</label>
                    <input type="checkbox" name="" id="arr_no">
                    <div class="arr_message hide">
                        <label for="">Message</label>
                  <textarea class=" " name="" id="" cols="30" rows="10"></textarea>
                  </div>
                    </div>
                    </div>
                    <div class="form_control">
                    <label for="">Upload Consent form</label>
                    <input type="file" name="" id="">
                    </div>
                    <button>Book</button>
                </form>
            </div>
            </div>
        </div>
</div>
<div class="outgoing_list_section hide">
<div class="appoitment_section">
<div class="appiontment_booking_container">
<div class="appiontment">
<div class="head_sec">
  <span>Outgoing Deceassed</span>
  <div class="appoitment_input_control">
  <i class="fa fa-search" id="search_icon"></i>
      <input type="text" placeholder="Search here" class="appoitment_input">
  </div>
</div>
<div class="table_container">
<table id="outgoing_table">
  <thead>
    <td>Number</td>
    <td>Deceased Name/Deceased Id</td>
    <td>Date/Time</td>
    <td>Relative Name/Relative Id</td>
    <td>Status</td>
  </thead>
  <tbody>
    <td>Princess Precious</td>
    <td>Pat001</td>
    <td>22-02-2024</td>
    <td>2:30PM</td>
    <td>Medical Test</td>
    <td>
      <button onClick="show_radiology_input()">Accept</button>
      <button>Reject</button>
    </td>
  </tbody>
  <tbody>
   
</table>
</div>
<div class="pending_transaction_list_pagination">
        <div class="flexs">
            <p id="prev_outgoing">Prev List</p>
            <p id="next_outgoing">Next List</p>
        </div>
</div>
</div>
</div>
</div>
</div>


<script src="js/sections.js"></script>
    <script src="js/index.js"></script>
</body>
</html>