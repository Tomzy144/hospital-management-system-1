<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
</head>
<body>
    
<div class="navbar">
        <div class="section1">
        </div>
        <div class="section2">
            <div class="icons">
            <i class="bi bi-person-fill" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="bi bi-bell-fill" id="icon">
          <div class="notification2">15</div>
          </i>
          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
            <h4>Princess Esther Asuquo</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/80e729b199b61a6c183b85263d35a6ef.jpg" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span>Princess Esther Asuquo</span>
            <i class="bi bi-caret-down-fill" id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
            <i class="bi bi-chat-dots-fill" id="icon"></i>
            <i class="bi bi-calendar-date-fill" id="icon" onClick="showAppoitmentSection()"></i>
                <i class="bi bi-box-arrow-right" id="icon"></i>
            </div>
        </div>
        
<div id="all_section_container">
<div class="appoitment_section">
<div class="appiontment_booking_container">
<div class="appiontment">
<div class="head_sec">
  <span>Incoming Prescriptions</span>
  <div class="appoitment_input_control">
  <i class="fa fa-search" id="search_icon"></i>
      <input type="text" placeholder="Search here" class="appoitment_input">
  </div>
</div>
<div class="table_container">
<table id="appoitment_table">
  <thead>
    <td>Number</td>
    <td>Doc Name</td>
    <td>Patient Name</td>
    <td>Patient Id</td>
    <td>Date</td>
    <td>Time</td>
    <td>Accept</td>
    <td>Reject</td>
  </thead>
  <tbody>
  </tbody>
  <tbody>
   
</table>
</div>
</div>
</div>

<div class="approved_appoitment">
<div class="head_sec">
  <span>Confirmed  Purchases</span>
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
    <td>Drug Purchased</td>
  </thead>
  <tbody>

  </tbody>
  </table>
</div>
</div>
</div>
<div class="prescription_form_section hide">
    <div class="prescription_section">
      <span>Drug Prescription</span>
      <div class="form_container">
        <form action="">
          <div class="form_section1">
          <div class="form_control">
            <label for="">Patient Name</label>
            <input type="text" name="" id="">
          </div>
          <div class="form_control">
            <label for="">Patient Id</label>
            <input type="text" name="" id="">
          </div>
          <div class="form_control">
            <label for="">Select Drugs</label>
            <input type="text" name="" id="" placeholder="Paracetamol">
          </div>
          <div class="form_control">
            <label for="">Strength</label>
            <input type="text" name="" id="">
          </div>
          <div class="form_control">
            <label for="">Dose</label>
            <input type="text" name="" id="">
          </div>
          <div class="form_control">
            <label for="">Quantity</label>
            <input type="text" name="" id="">
          </div>
          <!-- <i class="bi bi-plus-square-dotted" id="add_icon"></i> -->
          <!-- <i class="bi bi-plus-square-fill"  id="add_icon"></i> -->
          </div>
          <button>Book</button>
        </form>
        </div>
    </div>
    <div class="available_stocks_section">
      
<div class="available_stocks">
<div class="head_sec">
  <span>Available Stocks</span>
  <div class="appoitment_input_control">
  <i class="fa fa-search" id="search_icon"></i>
      <input type="text" placeholder="Search here" class="appoitment_input">
  </div>
</div>
<div class="table_container">
<table>
  <thead>
    <td>S/N</td>
    <td>Name</td>
    <td>Category</td>
    <td>Description</td>
    <td>Availability</td>
    <td>Status</td>
  </thead>
  <tbody>
  <td>1</td>
  <td>Paracetamol</td>
  <td>Tablet</td>
  <td>PainKiller</td>
  <td>30 Packet</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Flagi</td>
  <td>syrup </td>
  <td>Cough</td>
  <td>12 bottles</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Actal</td>
  <td>Tablet</td>
  <td>Mental Reducer</td>
  <td>1 packed</td>
  <td>Low</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Naproxen</td>
  <td>Syrup</td>
  <td>Wound Healer</td>
  <td>12 bottles</td>
  <td>Low</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Paracetamol</td>
  <td>Tablet</td>
  <td>PainKiller</td>
  <td>30 Packet</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Flagi</td>
  <td>syrup </td>
  <td>Cough</td>
  <td>12 bottles</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Actal</td>
  <td>Tablet</td>
  <td>Mental Reducer</td>
  <td>1 packed</td>
  <td>Low</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Naproxen</td>
  <td>Syrup</td>
  <td>Wound Healer</td>
  <td>12 bottles</td>
  <td>Low</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Paracetamol</td>
  <td>Tablet</td>
  <td>PainKiller</td>
  <td>30 Packet</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Flagi</td>
  <td>syrup </td>
  <td>Cough</td>
  <td>12 bottles</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Actal</td>
  <td>Tablet</td>
  <td>Mental Reducer</td>
  <td>0</td>
  <td>Out of stock</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Naproxen</td>
  <td>Syrup</td>
  <td>Wound Healer</td>
  <td>12 bottles</td>
  <td>Low</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Paracetamol</td>
  <td>Tablet</td>
  <td>PainKiller</td>
  <td>30 Packet</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Flagi</td>
  <td>syrup </td>
  <td>Cough</td>
  <td>12 bottles</td>
  <td>Available</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Actal</td>
  <td>Tablet</td>
  <td>Mental Reducer</td>
  <td>0</td>
  <td>Out of stock</td>
  </tbody>
  <tbody>
  <td>1</td>
  <td>Naproxen</td>
  <td>Syrup</td>
  <td>Wound Healer</td>
  <td>12 bottles</td>
  <td>Low</td>
  </tbody>
  </table>
</div>
</div>
    </div>
</div>
</div>
        <script src="js/index.js"></script>
</body>
</html>