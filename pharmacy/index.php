<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icons-1.10.2/font/bootstrap-icons.css">
</head>
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
        <li  id="emergency__form__link" class="links active" onclick="incomingDrugPurchasing()">
          <span>Incoming Drug Purchasing</span>
        </li>
        <li id="emergency__link" class="links" onclick="confirmedDrugPurchase()">
          <span>Confirmed Drugs Purchased</span>
        </li>
        <li id="emergency__link" class="links" onclick="drugStock()">
          <span>Drugs Stock</span>
        </li>
        <li id="emergency__link" class="links" onclick="bookDrug()">
          <span>Book Drug</span>
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
  <!----------------------------------------------------------------------------------------------------------------------->
        

<div class="list_div" id="incomingDrugPurchasing">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Incoming Drug Purchasing</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Patient Name</td>
                        <td>Patient Id</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td colspan="7">No Appoitment</td>
                </tr>
                </tbody>
        </table>
  </div>
  </div>


  <div class="list_div hide" id="confirmedDrugPurchase">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Confirmed Drug Purchasing</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="">
                <thead>
                    <tr>
                        <td>S/N</td>
                        <td>Patient Name</td>
                        <td>Patient Id</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td colspan="7">No Drug Purchased Yet</td>
                </tr>
                </tbody>
        </table>
  </div>
  </div>


    <div class="drug_presciption hide">
              <form action="" class="form" id="drug_prescription">
                  <h3>Book Drug</h3>
                <div class="each_sections">
                    <div class="form-control">
                        <label for="patientName">Patient Name</label>
                        <input type="text" name="patientName" id="patientName">
                    </div>
                    <div class="form-control">
                        <label for="patientId">Patient Id</label>
                        <input type="text" name="patientId" id="patientId">
                    </div>
                    <div class="form-control">
                        <label for="selectedDrugs">Selected Drug</label>
                        <select name="drugs" id="drugs">
                          <option value="">Paracetamol</option>
                          <option value="">Maleria Drugs</option>
                          <option value="">Capsule Drugs</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="drugStrength">Drug Strength</label>
                        <input type="text" name="drugStrength" id="drugStrength">
                    </div>
                    <div class="form-control">
                        <label for="drugDose">Drug Dose</label>
                        <input type="text" name="drugDose" id="drugDose" >
                      </div>
                    <div class="form-control">
                    <label for="drugQuantity">Drug Quantity</label>
                    <input type="text" name="drugQuantity" id="drugQuantity">
                    </div>
                    </div>
                    <button type="button" class="btn_submit" onclick="validataDrugBookInputField()">Book</button>
                </form>
            </div>
</div>


<div class="list_div hide" id="drugStock">
    <div class="table_container">
            <div class="search_bar_container">
                <h3>Drug Stocks</h3>
                <input type="text" name="" id="" placeholder="Search">
            </div>
            <table id="">
                <thead>
                    <tr>
                    <td>S/N</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Description</td>
                    <td>Availability</td>
                    <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td colspan="7">No Available Drugs</td>
                </tr>
                </tbody>
        </table>
  </div>
  </div>
        <script src="js/index.js"></script>
</body>
</html>