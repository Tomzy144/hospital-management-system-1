
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
function displayUserProfile(){
    document.querySelector(".profile_account").classList.toggle("hide");
};



function createDate(){
    const now = new Date();
    const options = {
    day:'numeric',
    month:'numeric',
    year:'numeric',
    hour:'numeric',
    minute:'numeric',
    second:'numeric',
    }
    const dateTime = new Intl.DateTimeFormat(navigator.language, options).format(now)
    document.querySelector('.display__date').textContent = dateTime
    }
    setInterval(() => createDate());
    ////////////////////////////////////////////////////////////////////


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
    displayOverallTransaction();
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
    var account_id = $('#account_id').val();
    var $btnSubmit = $('#paid_btn_' + patient_id);
    var btnText = $btnSubmit.html();
    $btnSubmit.html('Processing...');
    $btnSubmit.prop('disabled', true);

    var action = 'paid';
    var dataString = "action=" + action + "&patient_id=" + encodeURIComponent(patient_id) + "&time=" + encodeURIComponent(time)+"&option=" + encodeURIComponent(option)+"&account_id=" + encodeURIComponent(account_id);

    $.ajax({
        type: 'POST',
        url: "config/code.php",
        data: dataString,
        cache: false,
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                alert('Payment Approved');
                // window.location.reload();
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
    var account_id = $('#patient_id').val();
    const pending = document.querySelector('#pending tbody');
    const rowCount = pending.rows.length; 
    const newRow = pending.insertRow(rowCount);

    
    newRow.insertCell(0).innerHTML = rowCount + 1; // Serial Number (start from 1)
    newRow.insertCell(1).innerHTML = `PASSPORT`; // Placeholder for passport image
    newRow.insertCell(2).innerHTML = transaction.patient_id || 'N/A'; // Patient ID
    newRow.insertCell(3).innerHTML = transaction.account_appointment_id || 'N/A'; // Appointment ID
    newRow.insertCell(4).innerHTML = transaction.time || 'N/A'; // Date & Time
    newRow.insertCell(5).innerHTML = 'Test Request'; // Request type (can be dynamic)
    newRow.insertCell(6).innerHTML = transaction.total_amount.replace(/[' ']/g, '') || 'N/A'; // Total Amount
    newRow.insertCell(7).innerHTML = transaction.payment_status || 'N/A'; // Payment Status

    // Action buttons
    newRow.insertCell(8).innerHTML = `
    <button class="action-button" id="accept_${rowCount}">Accept</button>
    <button class="action-button">Reject</button>
    `;
    document.querySelector('#customerId').textContent = `Transaction Id: ${transaction.account_appointment_id}`
    document.querySelector('#date').textContent = `Date: ${new Date().toLocaleDateString()}`
    document.querySelector('#total__amount').textContent = `Total: ${transaction.total_amount}`
    console.log(transaction.tests)
    if (transaction.tests) {
        try {
            const testsObj = JSON.parse(transaction.tests); // Parse the JSON string
            let test = '<ul style="list-style: none; text-align:left">'; // Create an unordered list
            const receipt__table = document.querySelector('#receipt__table tbody'); // Get the receipt table body
    
            for (let testName in testsObj) {
                if (testsObj.hasOwnProperty(testName)) {
                    let test__price = testsObj[testName]; // Get the price of the test
                    test__price = test__price == 0 ? 'Free' : test__price; // Handle free tests
                    test += `<li style="color: white; font-size: 1rem;">${testName}</li>`;
                    // : ${test__price}
    
                    // Create a new row for each test
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td>${testName}</td>
                        <td>${test__price}</td>
                    `;
                    
                    // Append the row to the table body
                    receipt__table.appendChild(newRow);
                }
            }
            test += '</ul>'; // Close the list
            newRow.cells[5].innerHTML = test;
        } catch (error) {
            console.error('Error parsing tests:', error);
            newRow.cells[5].innerHTML = 'Invalid test data'; // Fallback for parsing errors
            const receipt__table = document.querySelector('#receipt__table tbody');
            const errorRow = document.createElement('tr');
            errorRow.innerHTML = `<td colspan="3">Invalid test data</td>`;
            receipt__table.appendChild(errorRow);
        }
    } else {
        const receipt__table = document.querySelector('#receipt__table tbody');
        const noDataRow = document.createElement('tr');
        noDataRow.innerHTML = `<td colspan="3">No tests available</td>`;
        receipt__table.appendChild(noDataRow);
        newRow.cells[6].innerHTML = 'N/A'; // If tests field is missing
    }
    
    const paidButton = document.querySelector(`#accept_${rowCount}`);
    paidButton.addEventListener('click', function(e) {

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
            paid(transaction.patient_id, transaction.time, 1,account_id);
            openModal('patient__receipt');
            if (selectMessage.parentNode) {
                document.body.removeChild(selectMessage); // Remove the message
            }
        };

        // Handle CASH button click
        document.querySelector('.cashButton').onclick = (event) => {
            event.stopPropagation(); // Prevent triggering parent click event
            paid(transaction.patient_id, transaction.time, 2,account_id);
            openModal('patient__receipt');
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


function printInvoice() {
    window.print();
    closeModal('patient__receipt')
    window.location.reload();
  }

  
 function  displaySuccessfullTransaction() {
    var action = 'fetch_appointment_list';
    var account_id = $('#account_id').val();
    var dataString = "action=" + action + "&account_id="+ account_id;
    

    $.ajax({
        type: 'POST',
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
                console.log(data)
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
            // if(!response.ok){
            //     console.error('Error:', response.message);
            //     const noTransactionRow = success.insertRow(0);
            //     const noTransactionCell = noTransactionRow.insertCell(0);
            //     noTransactionCell.colSpan = 9; // Span across all columns
            //     noTransactionCell.innerHTML = 'Error in the response.';
            //     noTransactionCell.style.textAlign = 'center';
            // }
    },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
            console.log('Response Text:', xhr.responseText);
            alert('AJAX Error: ' + error);
        }
    });
};


let cash = 0;
let pos = 0;

$(document).ready(function () {
    displaySuccessfullTransaction();
});

async function successful__transactions(transaction){
    const successTable = document.querySelector('#success tbody');
    const rowCount = successTable.rows.length;
    const newRow = successTable.insertRow(rowCount);

    newRow.insertCell(0).innerHTML = rowCount + 1; // Serial Number (start from 1)
    newRow.insertCell(1).innerHTML = "<img src = ../uploaded_files/profile_pix/patient/"+transaction.patient_passport+">";

    newRow.insertCell(2).innerHTML = transaction.patient_id || 'N/A'; // Patient ID
    newRow.insertCell(3).innerHTML = transaction.account_appointment_id || 'N/A'; // Appointment ID
    newRow.insertCell(4).innerHTML = transaction.time || 'N/A'; // Date & Time
    newRow.insertCell(5).innerHTML = transaction.approved_time || 'N/A'; // Date & Time
    newRow.insertCell(6).innerHTML = 'Test' || 'N/A'; // Total Amount
    newRow.insertCell(7).innerHTML = transaction.type  === '2' ? 'Cash' : 'POS' || 'N/A'; // Request type
    newRow.insertCell(8).innerHTML = transaction.total_amount.replace(/[' ']/g, '') || 'N/A'; // Total Amount
    newRow.insertCell(9).innerHTML = 'Success'; // Payment Status

    if(transaction.type === '2'){
        const cleanAmount = transaction.total_amount.replace(/[₦,]/g, ""); // Removes ₦ and commas
        const totalAmount = parseFloat(cleanAmount) || 0; // Ensure it's a valid number
            cash += totalAmount; 
    document.querySelector('#cash').textContent = `Cash Amount: ${new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN' }).format(cash)}`
    }else{
        const cleanAmount = transaction.total_amount.replace(/[₦,]/g, ""); // Removes ₦ and commas
        const totalAmount = parseFloat(cleanAmount) || 0; // Ensure it's a valid number
            pos += totalAmount; 
    document.querySelector('#pos').textContent = `Pos Amount: ${new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN' }).format(pos)}`
    }

    if (transaction.tests) {
        try {
            const testsObj = JSON.parse(transaction.tests); // Parse the JSON string
            let test = '<div style="list-style: none; text-align:left; display:flex; flex-wrap:wrap;">'; // Create an unordered list

            // Loop through the tests object
            for (let testName in testsObj) {
                if (testsObj.hasOwnProperty(testName)) {
                    let test__price = testsObj[testName]; // Declare testValue with let
                    test__price = test__price == 0 ? 'Free' : test__priceformat =  `₦${new Intl.NumberFormat('en-NG').format(test__price)}`
                    test += `<li style="color: white; font-size: 1rem; width:fit-content">${testName}</li>`;
                    // : ${test__price}
                }
            }
            test += '</div>'; // Close the list
            newRow.cells[6].innerHTML = test;
        } catch (error) {
            console.error('Error parsing tests:', error);
            newRow.cells[6].innerHTML = 'Invalid test data'; // Fallback for parsing errors
        }
    } else {
        newRow.cells[6].innerHTML = 'N/A'; // If tests field is missing
    }
}







 function displayOverallTransaction() {
    var action = 'fetch_overall_appointment_list';
    var dataString = "action=" + action;

    $.ajax({
        type: 'POST',
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
                        overall_transactions(transaction);
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
            // if(!response.ok){
            //     console.error('Error:', response.message);
            //     const noTransactionRow = overall__transactions.insertRow(0);
            //     const noTransactionCell = noTransactionRow.insertCell(0);
            //     noTransactionCell.colSpan = 9; // Span across all columns
            //     noTransactionCell.innerHTML = 'Error in the response.';
            //     noTransactionCell.style.textAlign = 'center';
            // }
    },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
            console.log('Response Text:', xhr.responseText);
            alert('AJAX Error: ' + error);
        }
    });
};


let cumulativeTotal = 0; // Initialize cumulative total to 0
function overall_transactions(transaction) {
    const overall__transactions = document.querySelector('#overall__transactions tbody');
    const rowCount = overall__transactions.rows.length;
    const newRow = overall__transactions.insertRow(rowCount);
    newRow.insertCell(0).innerHTML = rowCount + 1; // Serial Number (start from 1)
    newRow.insertCell(1).innerHTML = "<img src = ../uploaded_files/profile_pix/patient/"+transaction.patient_passport+">";
newRow.insertCell(2).innerHTML = transaction.patient_id || 'N/A'; // Patient ID
newRow.insertCell(3).innerHTML = transaction.account_appointment_id || 'N/A'; // Appointment ID
newRow.insertCell(4).innerHTML = transaction.time || 'N/A'; // Date & Time
newRow.insertCell(5).innerHTML = 'Test type' || 'N/A'; // Test type
newRow.insertCell(6).innerHTML = transaction.total_amount.replace(/\s/g, '') === '₦0' ? 'Free' : transaction.total_amount.replace(/\s/g, '');
newRow.insertCell(7).innerHTML = transaction.payment_status.includes('APPROVED') ? 'Success' : 'Failed';

 
    // Parse total_amount and remove any currency symbols/commas
    const cleanAmount = transaction.total_amount.replace(/[₦, ' ']/g, ""); // Removes ₦ and commas
    const totalAmount = parseFloat(cleanAmount) || 0; // Ensure it's a valid number

    // Add the amount to the cumulative total
    cumulativeTotal += totalAmount; 
    document.querySelector('#overall__amounts').textContent = `Overall Transaction Amount: ${new Intl.NumberFormat('en-NG', { style: 'currency', currency: 'NGN' }).format(cumulativeTotal)}`


    // Handle test data if it exists
    if (transaction.tests) {
        try {
            const testsObj = JSON.parse(transaction.tests); // Parse the JSON string
            let test = '<div style="list-style: none; display:flex; flex-wrap:wrap;">'; // Create a list for tests

            // Loop through the tests object
            for (let testName in testsObj) {
                if (testsObj.hasOwnProperty(testName)) {
                    let test__price = testsObj[testName]; // Get test price
                    test__price = test__price == 0 ? 'Free' : test__price; // Handle 'Free' case
                    test += `<li style="color: white; font-size: 1rem; width:fit-content">${testName}</li>`;
                    // : ${test__price}
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
}






function filterPendingTransactions() {
    const tableBody = document.querySelector('#pending tbody');
    const tableRows = Array.from(tableBody.querySelectorAll('tr')); // Convert NodeList to Array
    const searchInput = document.querySelector('#psearch').value.trim().toLowerCase();

    let hasVisibleRows = false;
    tableRows.forEach((row) => {
        if (row.children.length < 2)  return;

        const patientId = row.children[2].textContent.trim().toLowerCase();
        const transactionId = row.children[3].textContent.trim().toLowerCase();
        if (transactionId.includes(searchInput) || patientId.includes(searchInput)){
            row.style.display = ''; // Show the row
            hasVisibleRows = true;
           
        } else row.style.display = 'none'; // Hide the row
    });

    const existingNoDataMessage = document.querySelector('#noDataMessage');
    if (existingNoDataMessage) {
        existingNoDataMessage.remove();
    }
    if (!hasVisibleRows) {
        const noDataMessage = document.createElement('tr');
        noDataMessage.id = 'noDataMessage';
        noDataMessage.innerHTML = '<td colspan="8" style="text-align: center;">No User associated with this input</td>';
        tableBody.appendChild(noDataMessage);
    }
}
document.querySelector('#psearch').addEventListener('input', filterPendingTransactions);



function filterSuccessfulTransactions() {
    const tableBody = document.querySelector('#success tbody');
    const tableRows = Array.from(tableBody.querySelectorAll('tr')); // Convert NodeList to Array
    const searchInput = document.querySelector('#ssearch').value.trim().toLowerCase();

    let hasVisibleRows = false;
    tableRows.forEach((row) => {
        if (row.children.length < 2)  return;

        const patientId = row.children[2].textContent.trim().toLowerCase();
        const transactionId = row.children[3].textContent.trim().toLowerCase();
        const paymentType = row.children[7].textContent.trim().toLowerCase();
        if (transactionId.includes(searchInput) || patientId.includes(searchInput)  || paymentType.includes(searchInput)){
            row.style.display = ''; // Show the row
            hasVisibleRows = true;
           
        } else row.style.display = 'none'; // Hide the row
    });

    const existingNoDataMessage = document.querySelector('#noDataMessage');
    if (existingNoDataMessage) {
        existingNoDataMessage.remove();
    }
    if (!hasVisibleRows) {
        const noDataMessage = document.createElement('tr');
        noDataMessage.id = 'noDataMessage';
        noDataMessage.innerHTML = '<td colspan="8" style="text-align: center;">No User associated with this input</td>';
        tableBody.appendChild(noDataMessage);
    }
}
document.querySelector('#ssearch').addEventListener('input', filterSuccessfulTransactions);



function filterOverallTransactions() {
    const tableBody = document.querySelector('#overall__transactions tbody');
    const tableRows = Array.from(tableBody.querySelectorAll('tr')); // Convert NodeList to Array
    const searchInput = document.querySelector('#osearch').value.trim().toLowerCase();

    let hasVisibleRows = false;
    tableRows.forEach((row) => {
        if (row.children.length < 2)  return;

        const patientId = row.children[2].textContent.trim().toLowerCase();
        const transactionId = row.children[3].textContent.trim().toLowerCase();
        const paymentType = row.children[7].textContent.trim().toLowerCase();
        if (transactionId.includes(searchInput) || patientId.includes(searchInput)  || paymentType.includes(searchInput)){
            row.style.display = ''; // Show the row
            hasVisibleRows = true;
           
        } else row.style.display = 'none'; // Hide the row
    });

    const existingNoDataMessage = document.querySelector('#noDataMessage');
    if (existingNoDataMessage) {
        existingNoDataMessage.remove();
    }
    if (!hasVisibleRows) {
        const noDataMessage = document.createElement('tr');
        noDataMessage.id = 'noDataMessage';
        noDataMessage.innerHTML = '<td colspan="8" style="text-align: center;">No User associated with this input</td>';
        tableBody.appendChild(noDataMessage);
    }
}
document.querySelector('#osearch').addEventListener('input', filterOverallTransactions);