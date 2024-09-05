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
        <div class="section1">
        </div>
        <div class="section2">

          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <h4><?php echo $fullname ?></h4>
        </div>
            <div class="image">
            <img src="../Images/24b23c44ac34e5a0fb80978cd976604c.jpg" alt="">
            <div class="active_on"></div>
            </div>
        </img>  
            <span><?php echo $fullname ?></span>
            <i class="bi bi-caret-down-fill _profile_arrow_icon" onclick="click_icon_for_profile()"></i>
          </div>
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


        <div class="pending__transactions hide">
            <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Pending Transactions</h3>
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>
                <?php
                    $sql = "SELECT a.*, p.fullname, p.patient_passport 
                            FROM account_appointment_tab a
                            INNER JOIN patient_tab p ON a.patient_id = p.patient_id";
                    $result = mysqli_query($conn, $sql);
                    ?>

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
                            <?php
                            $sn = 1; // Initialize the counter for serial number
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Escaping output to prevent XSS attacks
                                    $patient_passport = htmlspecialchars($row["patient_passport"]);
                                    $fullname = htmlspecialchars($row['fullname']);
                                    $patient_id = htmlspecialchars($row['patient_id']);
                                    $time = htmlspecialchars($row['time']);
                                    $tests = htmlspecialchars($row['tests']);
                                    $total_amount = htmlspecialchars($row['total_amount']);
                                    $payment_status = htmlspecialchars($row['payment_status']);

                                    echo "<tr>
                                            <td>{$sn}</td>
                                            <td><img src='{$website_url}/uploaded_files/profile_pix/patient/{$patient_passport}' alt='passport'></td>
                                            <td>{$fullname}</td>
                                            <td data-patient-id='{$patient_id}'>{$patient_id}</td>
                                            <td data-time='{$time}'>{$time}</td>
                                            <td>{$tests}</td>
                                            <td>{$total_amount}</td>
                                            <td>{$payment_status}</td>
                                            <td>
                                                <button class='accept-btn' type='button' id='paid_btn_{$sn}' onclick='paid(\"{$patient_id}\", \"{$time}\")'>Paid</button>
                                                <button class='reject-btn'>Cancelled</button>
                                            </td>
                                        </tr>";
                                    $sn++; // Increment the serial number
                                }
                            } else {
                                echo "<tr><td colspan='9'>No records for now</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>
        </div>


        <div class="patient__receipt">
        <h1>Invoice</h1>
        <h3>Customer: John Doe</h3>
        <h3>Date: 2024-08-28</h3>
        <table id="receipt__table">
            <thead>
                <tr>
                    <td>Request type</td>
                    <td>Price</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                <!-- Rows will be dynamically inserted here -->
            </tbody>
        </table>
        <h3>Total: ₦3,000</h3>
        <button onclick="printInvoice()">Print</button>
    </div>

        <div class="successful__transactions hide">
        <div class="patient_list_div">
            <div class="search_bar_container">
                <h3>Successful Transactions</h3>
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>
                <?php $sql = "SELECT a.*, p.fullname, p.patient_passport 
                  FROM account_appointment_confirm_tab a
                  INNER JOIN patient_tab p ON a.patient_id = p.patient_id";
                  $result = mysqli_query($conn, $sql);

                  ?>

                  <table>
                      <thead>
                          <tr>
                              <td>S/N</td>
                              <td>PASSPORT</td>
                              <td>Patient Name</td>
                              <td>Patient ID</td>
                              <td>Time</td>
                              <td>Approved Time</td>
                              <td>Request Type</td>
                              <td>Amount($)</td>
                              <td>Status</td>
                          </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td><img src='$website_url/uploaded_files/profile_pix/patient/the image name from the database' alt='passport'></td>
                            <td>fullname</td>
                            <td>patient_id</td>
                            <td>time</td>
                            <td>approved_time</td>
                            <td>tests</td>
                            <td>total_amount</td>
                            <td>payment_status</td>
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
                <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here">
                </div>
                <!-- ?php $sql = "SELECT * FROM account_appointment_tab AND account_appointment_confirm_tab"?> -->
                    <table>
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
                                                <td>1</td>
                                                <!-- <td>
                                                        <img src="" alt="">
                                                </td> -->
                                                <td>Peace Harry</td>
                                                <td>PAT009</td>
                                                <td>23/09/2000</td>
                                                <td>23:00</td>
                                                <td>Check up</td>
                                                <td>100</td>
                                              <td>Successful</td>
                                              </tr>
                                            </tbody>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <!-- <td>
                                                        <img src="" alt="">
                                                </td> -->
                                                <td>Peace Harry</td>
                                                <td>PAT009</td>
                                                <td>23/09/2000</td>
                                                <td>23:00</td>
                                                <td>Check up</td>
                                                <td>100</td>
                                              <td>Successful</td>
                                              </tr>
                                            </tbody>
                                            <tbody>
                                              <tr>
                                                <td>1</td>
                                                <!-- <td>
                                                        <img src="" alt="">
                                                </td> -->
                                                <td>Peace Harry</td>
                                                <td>PAT009</td>
                                                <td>23/09/2000</td>
                                                <td>23:00</td>
                                                <td>Check up</td>
                                                <td>100</td>
                                              <td>Successful</td>
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

            <div class="print_receipt">
                <div class="overall__transactions">
                    <span>Overall transaction: $20,000</span>
                </div>
            </div>

 
        <div id="printing_receipt-container"></div>
        <div id="successful_transaction-container"></div>
        <div class="overlay hide"></div>


        <!---SCRIPT TAGS-->
    <!-- <script src="js/index.js"></script>
    <script src="js/jquery-v3.6.1.min.js"></script> -->
</body>
</html>