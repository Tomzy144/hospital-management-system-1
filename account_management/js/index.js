
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



async function displayPendingTransactions() {
//     try{
//       const response =  await  fetch('config/code.php/pending_transactions');
//       if(!response.ok) throw new Error('Network Issue');
//         const data = await response.json();
//         console.log(data)
//     }catch(err){
//         console.log(err.message)
//     }
// }
var action = 'pending_transactions';
var dataString = "action=" + action 

$.ajax({
    type: 'GET',
    url: "config/code.php",
    data: dataString,
    cache: false,
    dataType: 'json',
    success: function (data) {
        if (data.success) {
            console.log(data)
        } else {
            console.error('Error:', data.error);
        }
    },
    error: function (xhr, status, error) {
        console.error('AJAX Error:', error);
    }
})
}
displayPendingTransactions();
