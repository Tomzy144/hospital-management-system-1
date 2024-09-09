<?php include '../backend/config/connection.php';?>
<?php include '../config/account-manager-session-validation.php';?>

<?php
  $account_unit_id = $_POST['account_unit_id'];
?>



<?php    

$fetch_account_unit_profile = $callclass->_get_account_unit_details($conn, $s_account_unit_id);
$account_unit_profile_array = json_decode($fetch_account_unit_profile, true);
$fullname = $account_unit_profile_array[0]['fullname'];
$email = $account_unit_profile_array[0]['email'];
$phonenumber = $account_unit_profile_array[0]['phonenumber'];
// $role_id= $account_unit_profile_array[0]['role_id'];
$status_id = $account_unit_profile_array[0]['status_id'];
$date = $account_unit_profile_array[0]['date'];
$last_login = $account_unit_profile_array[0]['last_login'];
$passport = $account_unit_profile_array[0]["passport"]; 
$fetch_status = $callclass->_get_status_details($conn, $status_id);
$status_array = json_decode($fetch_status, true);
$status_name = $status_array[0]['status_name'];
?>

<?php 
$page = "account_unit_dash"; // Assign the value "account_unit_dash" to the $page variable
?>



<?php 
    


    $fetch_status = $callclass->_get_status_details($conn, $status_id);
    $status_array = json_decode($fetch_status, true);
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
    
    <?php include 'meta.php'?>

</head>
<body onload="displayPendingTransactions();">




<script>
       if (window.history && window.history.pushState) {
            window.history.pushState('forward', null,);
            window.onpopstate = function () {
                window.history.pushState('forward', null);
            };
        }
    </script>


    <!--DIFFERENT SECTIONS--->
    <div class="navbar">
        <div class="display__date">
        </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="">
            <span><?php echo $fullname ?></span>
           </div>

            <div class="image">
            <img src="<?php echo $website_url ?>/doctor/images/doctor2.jpg" alt="userImage"/>
            <div class="active_on"></div>
            </div>
            <span><?php echo $fullname ?></span>
            <i class="bi bi-caret-down-fill" onclick="displayUserProfile()"></i>
                 </div>
                </div>

    <div class="sidebar">
            <div class="sidebar-body">
                <ul>
                    <li onclick="pendingTransaction()" id="links" class="active">
                        <i class="bi bi-graph-up"></i>
                        <span>Pending transaction</span>
                    </li>
                    <li onclick="successfulTransaction()" id="links">
                        <i class="bi bi-credit-card"></i>
                        <span>Successful transactions</span>
                    </li>
                    <li onclick="overallTransactions()" id="links">
                        <i class="bi bi-credit-card"></i>
                        <span>Overall transactions</span>
                    </li>
                    <li onclick="document.getElementById('logoutform').submit();" id="links">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                        <form method="post" action="../config/code.php" id="logoutform">
                    <input type="hidden" name="action" value="logout"/>    
                </form>
                    </li>
                </ul>
            </div>
            <div class="sidebar-footer">
                    <div>
                    <i class="bi bi-person"></i>
                    <span>USER ID: <?php echo $s_account_unit_id?></span>
                    </div>
                    <div id="pos">POS: ₦0.00</div>
                    <div id="cash">Cash: ₦0.00</div>
                </div>
            </div>
        </div>


        <div class="pending__transactions">
            <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Pending Transactions</h3>
                    <input type="text" placeholder="Search here">
                </div>


                    <table id="pending">
                        <thead>
                            <tr>
                                <td>S/N</td>
                                <td>PASSPORT</td>
                                <td>Patient Name</td>
                                <td>Patient ID</td>
                                <td>Date & Time</td>
                                <td>Request type</td>
                                <td>Amount($)</td>
                                <td>Status</td>
                                <td>Actions</td> <!-- Added a column header for actions -->
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    

        <div class="modal hidden" id="patient__receipt">
        <button class="btn--close-modal" onclick="closeModal('patient__receipt')">&times;</button>
        <h2 class="modal__header">
        Invoice
      <span class="highlight">slip</span>
      </h2>
            <div class="heading">
            <h3 id="customerId">CustomerId: John Doe</h3>
            <h3 id="date">Date: 2024-08-28</h3>
            </div>
        <table id="receipt__table">
            <thead>
                <tr>
                    <td>Request type</td>
                    <td>Price</td>
                </tr>
                <tbody>
            
                </tbody>
            </thead>
            <tbody>
                <!-- Rows will be dynamically inserted here -->
            </tbody>
        </table>
        <h3 id="total__amount">Total: ₦3,000</h3>
        <button onclick="printInvoice()">Print</button>
    </div>

        <div class="successful__transactions hide">
        <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Successful Transactions</h3>
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>
                  <table id="success">
                      <thead>
                          <tr>
                              <td>S/N</td>
                              <td>PASSPORT</td>
                              <td>Patient Name</td>
                              <td>Patient ID</td>
                              <td>Time</td>
                              <td>Approved Time</td>
                              <td>Request Type</td>
                              <td>Payment Type</td>
                              <td>Amount($)</td>
                              <td>Status</td>
                          </tr>
                      </thead>
                      <tbody>
                       <tr>
                        <td colspan="10">No data available</td>
                       </tr>
                      </tbody>
                  </table>
                    </div>
                </div>
            </div>
            </div>
        </div>



        <div class="overall__transactions hide">
        <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Overall transactions</h3>
                    <input type="text" placeholder="Search here">
                </div>
                    <table id="overall__transactions">
                                            <thead>
                                                <tr>
                                                    <td>S/N</td>
                                                    <td>STAFF NAME</td>
                                                    <td>STAFF ID</td>
                                                    <td>Date of transaction</td>
                                                    <td>Time of transaction</td>
                                                    <td>Request type</td>
                                                    <td>Amount($)</td>
                                                    <td>Status</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                        <td colspan="8">No data available</td>
                       </tr>
                                            </tbody>
                        </table>
                    </div>
                    <div class="overall_amount">
                <h3>Overall amount: $40,000.00</h3>
            </div>
                </div>
            </div>
            </div>
        </div>
        <div class="black--background hidden"></div>
</body>
</html>