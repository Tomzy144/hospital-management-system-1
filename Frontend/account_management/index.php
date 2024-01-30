<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Management</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../awesome-font/css/font-awesome.min.css"> 
</head>
<body>
    <div class="navbar">
        <div class="section1">
        </div>
        <div class="section2">
            <div class="icons">
          <i class="fa fa-user" id="icon">
            <div class="notification1">9</div>
          </i>
          <i class="fa fa-bell" id="icon">
          <div class="notification2">15</div>
          </i>
          </div>
          <div class="profile">
            <div class="profile_account hide">
            <img id="image_profile_account" src="../Images/iii.jpg" alt="">
            <h4>Princess Esther Asuquo</h4>
            <button class="btn_submit">Upload Image</button>
            <span>change password</span>
        </div>
            <div class="image">
            <img src="../Images/iii.jpg" alt="">
            <div class="active"></div>
            </div>
        </img>  
            <span>Princess Esther Asuquo</span>
            <i class="fa fa-caret-down" id="icon-drop" onClick="click_icon_for_profile()"></i>
          </div>
        </div>
    </div>
        <div class="sidebar">
               <div class="sidebar_contents">
                <img width="80px" height="80px" src="../Images/Mount Tech Logo.jpg" alt="logo">
               </div>
            <div class="sidebar_icons">
                <i class="fa fa-envelope" id="icon"></i>
                <i class="fa fa-tags" id="icon" onClick="successful_transaction_history()"></i>
                <i class="fa fa-signal" id="icon" onClick="pending_transaction()"></i>
                <i class="fa fa-sign-out" id="icon"></i>
            </div>
        </div>
        <!----PENDIND TRANSFER & SUCCESSFUL TRANSACTION -->
        <div class="transaction_Section">
        <div class="pending_transaction_section">
        <div class="head-sec">
            <span>Pending Transactions</span>
            <div class="pending_transaction_input_control">
            <i class="fa fa-search" id="search-icon"></i>
                <input type="text" placeholder="Search here" class="pending_transaction_input">
            </div>
        </div>
        <div class="body_sec">
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>PASSPORT</td>
            <td>Patient Name/Patient ID</td>
            <td>Date/Time</td>
            <td>Request Type/Amount</td>
            <td>Paid/Cancelled</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>
                <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
                </div>
            </td>
            <td>
                <p>Precious Bassey</p>
                <p>PAT001</p>
            </td>
            <td>
                <p>22-02-2024</p>
                <p>2:30PM</p>
            </td>
            <td>
                <p>Rendered service of malaria test</p>
                <p>N30,000.00</p>
            </td>  
            <td>
            <button class="accept-btn" type="button" onClick="check_cash_or_pos()">Paid</button>
            <button class="reject-btn">Cancelled</button>
            </td>
        </tr>
</tbody>
    <tbody>
        <tr>
            <td>1</td>
            <td>
                <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
                </div>
            </td>
            <td>
                <p>Precious Bassey</p>
                <p>PAT001</p>
            </td>
            <td>
                <p>22-02-2024</p>
                <p>2:30PM</p>
            </td>
            <td>
                <p>Rendered service of malaria test</p>
                <p>N30,000.00</p>
            </td>  
            <td>
            <button class="accept-btn" type="button">Paid</button>
            <button class="reject-btn">Cancelled</button>
            </td>
        </tr>
</tbody>
    <tbody>
        <tr>
            <td>1</td>
            <td>
                <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
                </div>
            </td>
            <td>
                <p>Precious Bassey</p>
                <p>PAT001</p>
            </td>
            <td>
                <p>22-02-2024</p>
                <p>2:30PM</p>
            </td>
            <td>
                <p>Rendered service of malaria test</p>
                <p>N30,000.00</p>
            </td>  
            <td>
            <button class="accept-btn" type="button" onClick="window.print()">Paid</button>
            <button class="reject-btn">Cancelled</button>
            </td>
        </tr>
</tbody>
    <tbody>
        <tr>
            <td>1</td>
            <td>
                <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
                </div>
            </td>
            <td>
                <p>Precious Bassey</p>
                <p>PAT001</p>
            </td>
            <td>
                <p>22-02-2024</p>
                <p>2:30PM</p>
            </td>
            <td>
                <p>Rendered service of malaria test</p>
                <p>N30,000.00</p>
            </td>  
            <td>
            <button class="accept-btn" type="button" onClick="printDivContent()">Paid</button>
            <button class="reject-btn">Cancelled</button>
            </td>
        </tr>
</tbody>
</table>
        </div>
        <div class="pending_transaction_list_pagination">
                <div class="flexs">
                    <p>Prev List</p>
                    <p>Next List</p>
                </div>
        </div>
        <div class="personal_total_transaction_section">
            <p>Acct001</p>
            <p>Comfirmed Transactions</p>
            <p>Cash at hand:200.000.00</p>
            <p>POS:50,000.00</p>
            <p id="confirmed_amount">N250,000.00</p>
        </div>
        </div>
        <!---SUCCESSFUL DAILY TRANSFER SECTION-->
        <div class="successful_transaction">
            <div class="flex_container">
                <span>Todays Transactions History</span>
                <div class="transaction_box">
                    <div class="amount_item">
                        <h1>N1,300.00</h1>
                        <h4>Purchase of Maleria Drug</4>
                    </div>
                    <div class="successful_date">
                        <h4>Successful</h4>
                        <h3>24-09-2024</h3>
                    </div>
                </div>
                <div class="transaction_box">
                    <div class="amount_item">
                        <h1>N1,300.00</h1>
                        <h4>Paid for scanning test</4>
                    </div>
                    <div class="successful_date">
                        <h4>Successful</h4>
                        <h3>24-09-2024</h3>
                    </div>
                </div>
                <div class="transaction_box">
                    <div class="amount_item">
                        <h1>N1,300.00</h1>
                        <h4>Paid for scanning test</4>
                    </div>
                    <div class="successful_date">
                        <h4>Successful</h4>
                        <h3>24-09-2024</h3>
                    </div>
                </div>
                <div class="transaction_box">
                    <div class="amount_item">
                        <h1>N1,300.00</h1>
                        <h4>Paid for scanning test</4>
                    </div>
                    <div class="successful_date">
                        <h4>Successful</h4>
                        <h3>24-09-2024</h3>
                    </div>
                </div>
              <div class="total_trasaction">
                <span>Total:</span>
                <span>N203,0000.00</span>
              </div>
        </div>
        </div>
        </div>
        <div class="check_cash_pos hide">
            <i class="fa fa-times" id="close_pos_cash" onClick="close_check_cash_or_pos()"></i>
            <button onClick="show_print_recepit()">Cash</button>
                <h1>OR</h1>
            <button onClick="show_print_recepit()">POS</button>
        </div>
        </div>
        <div class="receipt_printing hide">
                <img src="../Images/Mount_Tech_Logo-removebg-preview.png" alt="">
                <h1>RECEIPT</h1>
                <div class="container">
                    <div class="name">
                    <p>Recepit to:</p>
                    <p>Kingsley Effiong</p>
                    </div>
                    <div class="date_and_id">
                        <p>Date: 23-09-2024</p>
                        <p>Your ID: 3jk230jk32b3232</p>
                    </div>
                </div>
                <div class="description_and_amount">
                    <table>
                        <thead>
                            <td>Description</td>
                            <td>Amount</td>
                        </thead>
                        <tbody>
                            <td>Maleria Test</td>
                            <td>2,300.00</td>
                        </tbody>
                        <tbody>
                            <td>Maleria Test</td>
                            <td>2,300.00</td>
                        </tbody>
                        <tbody>
                            <td>Maleria Test</td>
                            <td>2,300.00</td>
                        </tbody>
                        <tbody>
                            <td>Maleria Test</td>
                            <td>2,300.00</td>
                        </tbody>
                        <tbody>
                            <td>Maleria Test</td>
                            <td>2,300.00</td>
                        </tbody>
                        <tbody>
                            <td id="totalling">Total</td>
                            <td id="totalling">13,300.00</td>
                        </tbody>
                    </table>
                    <div class="payment_method">
                        <div class="section1">
                    <h3>Payment Method</h3>
                    <h3>POS</h3>
                    </div>
                    <div class="section2">
                        <h3>Alice Samuel</h3>
                        <h3>Administrator</h3>
                    </div>
                    </div>
                    <button onClick="printDivContent()">Print</button>
                </div>
        </div>
        <!-----SUCCESSFUL TRANSACTION HISTORY--->
        <div class="successful_transaction_history hide">
        <div class="successfull_transaction_section">
        <div class="head-sec">
            <span>Successful Transactions History</span>
            <div class="pending_transaction_input_control">
            <i class="fa fa-search" id="search-icon"></i>
                <input type="text" placeholder="Search here" class="pending_transaction_input">
            </div>
        </div>
        <div class="body_sec">
<table>
    <thead>
        <tr>
            <td>#</td>
            <td>PASSPORT</td>
            <td>Patient Name/Patient ID</td>
            <td>Date/Time</td>
            <td>Request Type/Amount</td>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
        <td>1</td>
        <td>
        <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
        </div>
        </td>
        <td>
            <p>Princess Precious Asuquo</p>
            <p>PAT0001</p>
        </td>
        <td>
            <p>23-09-2024</p>
            <p>23:09</p>
        </td>
        <td>
        <p>Rendered service of malaria test</p>
        <p>N30,000.00</p>
        </td>
        <td><button>Successful</button></td>
    </tbody>
    <tbody>
        <td>1</td>
        <td>
        <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
        </div>
        </td>
        <td>
            <p>Princess Precious Asuquo</p>
            <p>PAT0001</p>
        </td>
        <td>
            <p>23-09-2024</p>
            <p>23:09</p>
        </td>
        <td>
        <p>Rendered service of malaria test</p>
        <p>N30,000.00</p>
        </td>
        <td><button>Successful</button></td>
    </tbody>
    <tbody>
        <td>1</td>
        <td>
        <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
        </div>
        </td>
        <td>Princess Precious Asuquo</td>
        <td>
            <p>23-09-2024</p>
            <p>23:09</p>
        </td>
        <td>
        <p>Rendered service of malaria test</p>
        <p>N30,000.00</p>
        </td>
        <td><button>Successful</button></td>
    </tbody>
    <tbody>
        <td>1</td>
        <td>
        <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
        </div>
        </td>
        <td>
            <p>Princess Precious Asuquo</p>
            <p>PAT0001</p>
        </td>
        <td>
            <p>23-09-2024</p>
            <p>23:09</p>
        </td>
        <td>
        <p>Rendered service of malaria test</p>
        <p>N30,000.00</p>
        </td>
        <td><button>Successful</button></td>
    </tbody>
    <tbody>
        <td>1</td>
        <td>
        <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
        </div>
        </td>
        <td>
            <p>Princess Precious Asuquo</p>
            <p>PAT0001</p>
        </td>
        <td>
            <p>23-09-2024</p>
            <p>23:09</p>
        </td>
        <td>
        <p>Rendered service of malaria test</p>
        <p>N30,000.00</p>
        </td>
        <td><button>Successful</button></td>
    </tbody>
    <tbody>
        <td>1</td>
        <td>
        <div class="image">
                <img width="70px" height="70px" src="../Images/imaculater.jpg" alt="">
        </div>
        </td>
        <td>
            <p>Princess Precious Asuquo</p>
            <p>PAT0001</p>
        </td>
        <td>
            <p>23-09-2024</p>
            <p>23:09</p>
        </td>
        <td>
        <p>Rendered service of malaria test</p>
        <p>N30,000.00</p>
        </td>
        <td><button>Successful</button></td>
    </tbody>
</table>
        </div>
        <div class="pending_transaction_list_pagination">
                <div class="flexs">
                    <p>Prev List</p>
                    <p>Next List</p>
                </div>
        </div>
    </div>
    </div>
    <div class="overlay hide"></div>
    <script src="index.js"></script>
</body>
</html>