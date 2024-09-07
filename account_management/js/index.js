
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



// let messageContainer = document.createElement('div');
// document.body.appendChild(messageContainer);

// const createAlertMessage = (text, className, duration = 5000) => {
//   const message = document.createElement('div');
//   message.className = className + ' alert';
//   message.innerHTML = `
//     <div class="content">
//     <div class="message">
//       <div class="icon">
//         <i class="bi bi-exclamation-triangle-fill bootsrapIcon"></i>
//         </div>
//         <h2>${text}</h2>
//         </div>
//     </div>
//   `;
//   messageContainer.appendChild(message);
//   if(duration !== 0){
//     setTimeout(() => {
//         message.classList.add('hide');
//         setTimeout(() => message.remove(), 500); 
//       }, duration);
//   }
//   return message;
// }

// const successMessage = (text) => createAlertMessage(text, 'success');
// const infoMessage = (text) => createAlertMessage(text, 'info');
// const warningMessage = (text) => createAlertMessage(text, 'warning');
// const dangerMessage = (text) => createAlertMessage(text, 'danger', 4000); 
// const optionsMessage = (text, opt1, opt2) =>{
//     const message = createAlertMessage(text, 'info', 0)
// } 




function paid(patient_id, time,option) {
    var $btnSubmit = $('#paid_btn_' + patient_id);
    var btnText = $btnSubmit.html();
    $btnSubmit.html('Processing...');
    $btnSubmit.prop('disabled', true);

    var action = 'paid';
    var dataString = "action=" + action + "&patient_id=" + encodeURIComponent(patient_id) + "&time=" + encodeURIComponent(time)+"&option=" + encodeURIComponent(option);

    $.ajax({
        type: 'POST',
        url: "config/code.php",
        data: dataString,
        cache: false,
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                alert('Payment Approved');
                window.location.reload();
                console.log(data)
                $btnSubmit.html('Transfer');
                $btnSubmit.prop('disabled', false);
                // window.location.reload(); // Reload the page to reflect the changes
            } 
            
            else {
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
            const pending = document.querySelector('#pending tbody');
            // Clear any existing rows
            pending.innerHTML = '';

            if (response.success) {
                const data = response.data;

                if (Array.isArray(data) && data.length > 0) {
                    // If transactions are found, loop through them and add to the table
                    data.forEach(transaction => {
                        pending__transactions(transaction);
                    });
                } else {
                    // No transactions found, show "No transaction found" message
                    const noTransactionRow = pending.insertRow(0);
                    const noTransactionCell = noTransactionRow.insertCell(0);
                    noTransactionCell.colSpan = 9; // Span across all columns
                    noTransactionCell.innerHTML = 'No transaction found';
                    noTransactionCell.style.textAlign = 'center';
                }
            } 
            if(response.message === 'No pending transactions found.'){
                console.error('Error:', response.message);
                const noTransactionRow = pending.insertRow(0);
                const noTransactionCell = noTransactionRow.insertCell(0);
                noTransactionCell.colSpan = 9; // Span across all columns
                noTransactionCell.innerHTML = 'No pending transactions found.';
                noTransactionCell.style.textAlign = 'center';
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
            console.log('Response Text:', xhr.responseText);
            alert('AJAX Error: ' + error);
        }
    });
}



const pending__transactions = function(transaction) {
    const pending = document.querySelector('#pending tbody');
    const rowCount = pending.rows.length; 
    const newRow = pending.insertRow(rowCount);

    
    newRow.insertCell(0).innerHTML = rowCount + 1; // Serial Number (start from 1)
    newRow.insertCell(1).innerHTML = `PASSPORT`; // Placeholder for passport image
    newRow.insertCell(2).innerHTML = transaction.patient_id || 'N/A'; // Patient ID
    newRow.insertCell(3).innerHTML = transaction.account_appointment_id || 'N/A'; // Appointment ID
    newRow.insertCell(4).innerHTML = transaction.time || 'N/A'; // Date & Time
    newRow.insertCell(5).innerHTML = 'Test Request'; // Request type (can be dynamic)
    newRow.insertCell(6).innerHTML = transaction.total_amount || 'N/A'; // Total Amount
    newRow.insertCell(7).innerHTML = transaction.payment_status || 'N/A'; // Payment Status

    // Action buttons
    newRow.insertCell(8).innerHTML = `
    <button class="action-button" id="accept_${rowCount}">Accept</button>
    <button class="action-button">Reject</button>
    `;
    if (transaction.tests) {
        try {
            const testsObj = JSON.parse(transaction.tests); // Parse the JSON string
            let test = '<ul style="list-style: none; text-align:left">'; // Create an unordered list

            for (let testName in testsObj) {
                if (testsObj.hasOwnProperty(testName)) {
                    let test__price = testsObj[testName]; // Declare testValue with let
                    test__price = test__price == 0 ? 'Free' : test__price;
                    test += `<li style="color: white; font-size: 1rem;">${testName}: ${test__price}</li>`;
                }
            }
            test += '</ul>'; // Close the list
            newRow.cells[5].innerHTML = test;
        } catch (error) {
            console.error('Error parsing tests:', error);
            newRow.cells[5].innerHTML = 'Invalid test data'; // Fallback for parsing errors
        }
    } else {
        newRow.cells[5].innerHTML = 'N/A'; // If tests field is missing
    }
    const paidButton = document.querySelector(`#accept_${rowCount}`);
    paidButton.addEventListener('click', function(e) {
       
        console.log( e.target.closest('tr'))
        // Create the selectMessage element
        const selectMessage = document.createElement('div');
        selectMessage.className = 'alert info';
        selectMessage.innerHTML = `
            <div class="buttonflex">
                <button class="posButton">POS</button>
                <button class="cashButton">CASH</button>
            </div>
        `;
        document.body.appendChild(selectMessage);

        // Handle POS button click
        document.querySelector('.posButton').onclick = (event) => {
            event.stopPropagation(); // Prevent triggering parent click event
            paid(transaction.patient_id, transaction.time, 1);
            console.log('Transaction successful');
            if (selectMessage.parentNode) {
                document.body.removeChild(selectMessage); // Remove the message
            }
        };

        // Handle CASH button click
        document.querySelector('.cashButton').onclick = (event) => {
            event.stopPropagation(); // Prevent triggering parent click event
            paid(transaction.patient_id, transaction.time, 2);
            console.log('Transaction successful');
            if (selectMessage.parentNode) {
                document.body.removeChild(selectMessage); // Remove the message
            }
        };

        // Remove the message when clicking outside the buttons
        selectMessage.onclick = (event) => {
            event.stopPropagation(); // Prevent click on buttons from triggering this
            if (selectMessage.parentNode) {
                document.body.removeChild(selectMessage); // Remove the message
            }
        };
    });
};







const displaySuccessfullTransaction = function() {
    var action = 'transactions';
    var dataString = "action=" + action;

    $.ajax({
        type: 'GET',
        url: "config/code.php",
        data: dataString,
        cache: false,
        dataType: 'json', // Expecting a JSON response
        success: function (response) {
            const success = document.querySelector('#success tbody');
            // Clear any existing rows
            success.innerHTML = '';
            if (response.success) {
                const data = response.data;
                if (Array.isArray(data) && data.length > 0) {
                    data.forEach(transaction => {
                        successful__transactions(transaction);
                    });
                } else {
                    // No transactions found, show "No transaction found" message
                    const noTransactionRow = success.insertRow(0);
                    const noTransactionCell = noTransactionRow.insertCell(0);
                    noTransactionCell.colSpan = 9; // Span across all columns
                    noTransactionCell.innerHTML = 'No transaction found';
                    noTransactionCell.style.textAlign = 'center';
                }
            } 
            if(response.message === 'No success transactions found.'){
                console.error('Error:', response.message);
                const noTransactionRow = success.insertRow(0);
                const noTransactionCell = noTransactionRow.insertCell(0);
                noTransactionCell.colSpan = 9; // Span across all columns
                noTransactionCell.innerHTML = 'No success transactions found.';
                noTransactionCell.style.textAlign = 'center';
            }
            if(!response.ok){
                console.error('Error:', response.message);
                const noTransactionRow = success.insertRow(0);
                const noTransactionCell = noTransactionRow.insertCell(0);
                noTransactionCell.colSpan = 9; // Span across all columns
                noTransactionCell.innerHTML = 'Error in the response.';
                noTransactionCell.style.textAlign = 'center';
            }
    },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
            console.log('Response Text:', xhr.responseText);
            alert('AJAX Error: ' + error);
        }
    });
};

const successful__transactions = function(transaction){
    const successTable = document.querySelector('#success tbody');
    const rowCount = successTable.rows.length;
    const newRow = successTable.insertRow(rowCount);

    newRow.insertCell(0).innerHTML = rowCount + 1; // Serial Number (start from 1)
    newRow.insertCell(1).innerHTML = `PASSPORT`; // Placeholder for passport image
    newRow.insertCell(2).innerHTML = transaction.patient_id || 'N/A'; // Patient ID
    newRow.insertCell(3).innerHTML = transaction.account_appointment_id || 'N/A'; // Appointment ID
    newRow.insertCell(4).innerHTML = transaction.time || 'N/A'; // Date & Time
    newRow.insertCell(5).innerHTML = transaction.total_amount || 'N/A'; // Total Amount
    newRow.insertCell(6).innerHTML = 'Test' || 'N/A'; // Request type
    newRow.insertCell(7).innerHTML = transaction.total_amount || 'N/A'; // Total Amount
    newRow.insertCell(8).innerHTML = 'Success'; // Payment Status


    if (transaction.tests) {
        try {
            const testsObj = JSON.parse(transaction.tests); // Parse the JSON string
            let test = '<ul style="list-style: none; text-align:left">'; // Create an unordered list

            // Loop through the tests object
            for (let testName in testsObj) {
                if (testsObj.hasOwnProperty(testName)) {
                    let test__price = testsObj[testName]; // Declare testValue with let
                    test__price = test__price == 0 ? 'Free' : test__price;
                    test += `<li style="color: white; font-size: 1rem;">${testName}: ${test__price}</li>`;
                }
            }
            test += '</ul>'; // Close the list
            newRow.cells[6].innerHTML = test;
        } catch (error) {
            console.error('Error parsing tests:', error);
            newRow.cells[6].innerHTML = 'Invalid test data'; // Fallback for parsing errors
        }
    } else {
        newRow.cells[6].innerHTML = 'N/A'; // If tests field is missing
    }
}

displaySuccessfullTransaction()






const displayOverallTransaction = function() {
    var action = 'all_transactions';
    var dataString = "action=" + action;

    $.ajax({
        type: 'GET',
        url: "config/code.php",
        data: dataString,
        cache: false,
        dataType: 'json', // Expecting a JSON response
        success: function (response) {
            const overall__transactions = document.querySelector('#overall__transactions tbody');
            // Clear any existing rows
            overall__transactions.innerHTML = '';
            if (response.success) {
                const data = response.data;
                if (Array.isArray(data) && data.length > 0) {
                    data.forEach(transaction => {
                        overall___transactions(transaction);
                    });
                } else {
                    // No transactions found, show "No transaction found" message
                    const noTransactionRow = overall__transactions.insertRow(0);
                    const noTransactionCell = noTransactionRow.insertCell(0);
                    noTransactionCell.colSpan = 9; // Span across all columns
                    noTransactionCell.innerHTML = 'No transaction found';
                    noTransactionCell.style.textAlign = 'center';
                }
            } 
            if(response.message === 'No success transactions found.'){
                console.error('Error:', response.message);
                const noTransactionRow = overall__transactions.insertRow(0);
                const noTransactionCell = noTransactionRow.insertCell(0);
                noTransactionCell.colSpan = 9; // Span across all columns
                noTransactionCell.innerHTML = 'No success transactions found.';
                noTransactionCell.style.textAlign = 'center';
            }
            if(!response.ok){
                console.error('Error:', response.message);
                const noTransactionRow = overall__transactions.insertRow(0);
                const noTransactionCell = noTransactionRow.insertCell(0);
                noTransactionCell.colSpan = 9; // Span across all columns
                noTransactionCell.innerHTML = 'Error in the response.';
                noTransactionCell.style.textAlign = 'center';
            }
    },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
            console.log('Response Text:', xhr.responseText);
            alert('AJAX Error: ' + error);
        }
    });
};

const overall__transactions = function(transaction){
    const overall__transactions = document.querySelector('#overall__transactions tbody');
    const rowCount = overall__transactions.rows.length;
    const newRow = overall__transactions.insertRow(rowCount);

    newRow.insertCell(0).innerHTML = rowCount + 1; // Serial Number (start from 1)
    newRow.insertCell(1).innerHTML = `PASSPORT`; // Placeholder for passport image
    newRow.insertCell(2).innerHTML = transaction.patient_id || 'N/A'; // Patient ID
    newRow.insertCell(3).innerHTML = transaction.account_appointment_id || 'N/A'; // Appointment ID
    newRow.insertCell(4).innerHTML = transaction.time || 'N/A'; // Date & Time
    newRow.insertCell(5).innerHTML = transaction.total_amount || 'N/A'; // Total Amount
    newRow.insertCell(6).innerHTML = 'Test' || 'N/A'; // Request type
    newRow.insertCell(7).innerHTML = transaction.total_amount || 'N/A'; // Total Amount
    newRow.insertCell(8).innerHTML = 'Success'; // Payment Status


    if (transaction.tests) {
        try {
            const testsObj = JSON.parse(transaction.tests); // Parse the JSON string
            let test = '<ul style="list-style: none; text-align:left">'; // Create an unordered list

            // Loop through the tests object
            for (let testName in testsObj) {
                if (testsObj.hasOwnProperty(testName)) {
                    let test__price = testsObj[testName]; // Declare testValue with let
                    test__price = test__price == 0 ? 'Free' : test__price;
                    test += `<li style="color: white; font-size: 1rem;">${testName}: ${test__price}</li>`;
                }
            }
            test += '</ul>'; // Close the list
            newRow.cells[6].innerHTML = test;
        } catch (error) {
            console.error('Error parsing tests:', error);
            newRow.cells[6].innerHTML = 'Invalid test data'; // Fallback for parsing errors
        }
    } else {
        newRow.cells[6].innerHTML = 'N/A'; // If tests field is missing
    }
}

displayOverallTransaction()