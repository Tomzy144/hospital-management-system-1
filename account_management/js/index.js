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
                window.location.reload(); // Reload the page to reflect the changes
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
