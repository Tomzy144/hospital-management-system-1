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


function paid() {
    // Retrieve the patient_id and time from the elements
    var patient_id = document.getElementById('patient_id').getAttribute('data-patient-id');
    var time = document.getElementById('time').getAttribute('data-time');
    var $btnSubmit = $('#paid_btn');
    var btnText = $btnSubmit.html();
    
    // Update button text and disable it
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
            if (data.success) { // Check if 'success' is true
                alert("Payment Approved");
                $btnSubmit.html('Transfer');
                $btnSubmit.prop('disabled', false);
                window.location.reload();
            } else {
                console.error('Error:', data.response.message); // Use 'message' for error details
                alert(data.response.message); // Alert user about the error
                $btnSubmit.html(btnText);
                $btnSubmit.prop('disabled', false);
            }
        },
        error: function (xhr, status, error) {
            console.error('AJAX Error:', error);
            alert('An error occurred. Please try again.');
            $btnSubmit.html(btnText);
            $btnSubmit.prop('disabled', false);
        }
    });
}
