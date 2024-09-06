
//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};
const links =  document.querySelectorAll('#links');
function toggleSidebarLinks(clickedLink){
    links.forEach(link => link.classList.remove('active'));
    clickedLink.classList.add('active');
}
links.forEach(link => {
    link.addEventListener('click', function() {
        toggleSidebarLinks(this);
    });
});



const modal = document.querySelector('.modal');
const blackBackground = document.querySelector('.black--background');

const openModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.remove('hidden');
  blackBackground.classList.remove('hidden');
};


const closeModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.add('hidden');
  blackBackground.classList.add('hidden');
};
////////



function pendingTransaction() {
    $('.pending__transactions').removeClass('hide');
    $('.successful__transactions').addClass('hide');
    $('.overall__transactions').addClass('hide');
}

function successfulTransaction(){
    $('.pending__transactions').addClass('hide');
    $('.successful__transactions').removeClass('hide');
    $('.overall__transactions').addClass('hide');
}

function overallTransactions(){
    $('.pending__transactions').addClass('hide');
    $('.successful__transactions').addClass('hide');
    $('.overall__transactions').removeClass('hide');
}


function showMessage(message, text, backgroundColor) {
    message.className = 'alert_div';
    message.innerHTML = text;
    message.style.backgroundColor = backgroundColor;
    document.querySelector('body').prepend(message);
    setTimeout(() => message.classList.add('hide'), 3000);
}



let messageContainer = document.createElement('div');
document.body.appendChild(messageContainer);

const createAlertMessage = (text, className, duration = 5000) => {
  const message = document.createElement('div');
  message.className = className + ' alert';
  message.innerHTML = `
    <div class="content">
    <div class="message">
      <div class="icon">
        <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
        </div>
        <h2>${text}</h2>
        </div>
    </div>
  `;
  messageContainer.appendChild(message);
  if(duration !== 0){
    setTimeout(() => {
        message.classList.add('hide');
        setTimeout(() => message.remove(), 500); 
      }, duration);
  }
  return message;
}

const successMessage = (text) => createAlertMessage(text, 'success');
const infoMessage = (text) => createAlertMessage(text, 'info');
const warningMessage = (text) => createAlertMessage(text, 'warning');
const dangerMessage = (text) => createAlertMessage(text, 'danger', 4000); 
const optionsMessage = (text, opt1, opt2) =>{
    const message = createAlertMessage(text, 'info', 0);

} 




function paid(patient_id, time) {
    var $btnSubmit = $('#paid_btn_' + patient_id);
    var btnText = $btnSubmit.html();
    $btnSubmit.html('Processing...');
    $btnSubmit.prop('disabled', true);

    var action = 'paid';
    var dataString = "action=" + action + "&patient_id=" + encodeURIComponent(patient_id) + "&time=" + encodeURIComponent(time);

    $.ajax({
        type: 'POST',
        url: "config/code.php",
        data: dataString,
        cache: false,
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                alert('Payment Approved');
                $btnSubmit.html('Transfer');
                $btnSubmit.prop('disabled', false);
                // window.location.reload(); // Reload the page to reflect the changes
            } else {
                console.error('Error:', data.error);
                $btnSubmit.html(btnText);
                $btnSubmit.prop('disabled', false);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
            $btnSubmit.html(btnText);
            $btnSubmit.prop('disabled', false);
        }
    });
}


function accept() {
    const paid_buttons = document.querySelectorAll('#paid_btn_1');
    paid_buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            //PATIENT DETAILS
            const reqType = e.target.closest('tr').children[5].textContent
            console.log(reqType);
            const totalAmount = e.target.closest('tr').children[6].textContent;
            const totalAmountNumber = Number(totalAmount.replace(/[₦ ,]+/g, ''));

            // Create the POS or Cash selection popup
            const selectMessage = document.createElement('div');
            selectMessage.className = 'alert info';
            selectMessage.innerHTML = `
                <div class="buttonflex">
                    <button id="posButton">POS</button>
                    <button id="cashButton">CASH</button>
                </div>
            `;
            document.body.appendChild(selectMessage);

            // Add event listeners for POS and Cash buttons
            document.getElementById('posButton').addEventListener('click', () => handlePayment('POS', totalAmountNumber));
            document.getElementById('cashButton').addEventListener('click', () => handlePayment('Cash', totalAmountNumber));

            // Remove the popup after a selection
            selectMessage.addEventListener('click', () => selectMessage.remove());
        });
    });
}


function handlePayment(type, amount) {
    const currentDate = new Date().toLocaleDateString();

    // Add the payment details to the receipt table
    const receiptTable = document.getElementById('receipt__table').querySelector('tbody');
    const row = receiptTable.insertRow();
    row.insertCell(0).textContent = `${type} Payment`;
    row.insertCell(1).textContent = `₦${amount.toFixed(2)}`;
    row.insertCell(2).textContent = currentDate;

    let storageKey = type === 'POS' ? 'totalPos' : 'totalCash';
    let totalAmount = parseFloat(localStorage.getItem(storageKey) || '0');
    totalAmount += amount;
    localStorage.setItem(storageKey, totalAmount.toString());

    updateDisplay();
}

function updateDisplay() {
    const posAmount = parseFloat(localStorage.getItem('totalPos') || '0');
    const cashAmount = parseFloat(localStorage.getItem('totalCash') || '0');

    document.getElementById('pos').textContent = `POS: ₦${posAmount.toFixed(2)}`;
    document.getElementById('cash').textContent = `Cash: ₦${cashAmount.toFixed(2)}`;
}

function printInvoice() {
    window.print();
}

// Initialize the display with values from local storage
updateDisplay();
accept();

function displayPendingTransactions() {
    var action = 'pending_transactions';
    var dataString = "action=" + action;

    $.ajax({
        type: 'POST',
        url: "config/code.php",
        data: dataString,
        cache: false,
        dataType: 'json', // Expecting a JSON response
        success: function (response) {
            // Logging the full response to inspect the structure
            console.log('Full response:', response);

            if (response.success) {
                const data = response.data;

                // Check if data is an object (not an array)
                if (!typeof data === 'object' && Array.isArray(data)) {
                    // Directly pass the transaction data and handle the table update
                    pending__transactions(data);
                } else {
                    console.error('Expected data to be an object, but got:', typeof data);
                }
            } else {
                // Handle cases where success is false
                console.error('Error:', response.message);
                alert('Error: ' + response.message);
            }
        },
        error: function (xhr, status, error) {
            // Logs the AJAX error for debugging
            console.error('AJAX Error:', error);
            console.log('Response Text:', xhr.responseText); // Logs the full server response
            alert('AJAX Error: ' + error);
        }
    });
}
const pending__transactions = function(transaction) {
    const pending = document.querySelector('#pending tbody');
    const rowCount = pending.rows.length + 1; // This counts the current rows for serial number
    const newRow = pending.insertRow(); // Insert a new row

    // Correctly insert cells based on your table structure (9 columns)
    newRow.insertCell(0).innerHTML = rowCount || 'N/A'; // Serial Number
    newRow.insertCell(1).innerHTML = `<img src="path_to_default_image.png" alt="Passport" width="50" height="50">`; // Placeholder for passport image
    newRow.insertCell(2).innerHTML = transaction.patient_id || 'N/A'; // Patient ID
    newRow.insertCell(3).innerHTML = transaction.account_appointment_id || 'N/A'; // Appointment ID
    newRow.insertCell(4).innerHTML = transaction.time || 'N/A'; // Date & Time
    newRow.insertCell(5).innerHTML = 'Test Request'; // Request type (you may want to extract this from tests)
    newRow.insertCell(6).innerHTML = transaction.total_amount || 'N/A'; // Total Amount
    newRow.insertCell(7).innerHTML = transaction.payment_status || 'N/A'; // Payment Status
    
    // Action buttons (you can add functionality for these buttons)
    newRow.insertCell(8).innerHTML = `
    
    <button class="action-button">Accept</button>
    <button class="action-button">Reject</button>
    `;

    // Handle the 'tests' field (which is a JSON string)
    if (transaction.tests) {
        try {
            const testsObj = JSON.parse(transaction.tests); // Parse the JSON string
            let testsHtml = '<ul style="list-style: none; text-align:left">'; // Create an unordered list to hold the tests

            // Loop through the tests object and add each test and value to the list
            for (let testName in testsObj) {
                if (testsObj.hasOwnProperty(testName)) {
                    const testValue = testsObj[testName];
                    testsHtml += `<li style="color: white; font-size: 1rem;">${testName}: ${testValue}</li>`;

                }
            }

            testsHtml += '</ul>'; // Close the list

            // Insert the tests HTML in the 'Request type' column (assuming it is the 5th column)
            newRow.cells[5].innerHTML = testsHtml;
        } catch (error) {
            console.error('Error parsing tests:', error);
            newRow.cells[5].innerHTML = 'Invalid test data'; // Fallback if parsing fails
        }
    } else {
        newRow.cells[5].innerHTML = 'N/A'; // If tests field is missing
    }
};



//   / Uncomment to call the function
// displayPendingTransactions();

    
// const imageCell = newRow.insertCell(1);
    // const image = document.createElement('img');
    // image.src = staff.capturedImage; // Assuming staff.capturedImage is a base64 string from the server
    // image.alt = 'Staff Passport';
    // image.style.width = '50px'; // Adjust size as needed
    // image.style.height = '50px'; // Adjust size as needed
    // imageCell.appendChild(image);
