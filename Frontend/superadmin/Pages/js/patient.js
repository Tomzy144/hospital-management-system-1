function showTable(category) {
    var tables = document.getElementsByClassName("category-table");

    // Hide the "All" table
    var allTable = document.getElementById('All');
    if (allTable) {
        allTable.style.display = 'none';
    }

    // Hide all other tables
    for (var i = 0; i < tables.length; i++) {
        if (tables[i].id !== category) {
            tables[i].style.display = 'none';
        }
    }

    // Show the selected table
    var selectedTable = document.getElementById(category);
    if (selectedTable) {
        selectedTable.style.display = 'table';
    }
}



function _fetch_patient_list() {
    

    const search_term = document.getElementById("search_term").value;
    const searchResultsBody = document.getElementById("searchResultsBody");

    // Clearing the existing search results
    searchResultsBody.innerHTML = "";

    //  an AJAX request to fetch search results
    fetch('../../../backend/config/search.php?search_term=' + search_term)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Filtering patients based on the search term
            const searchTerm = search_term.toLowerCase();
            const filteredPatients = data.filter(patient => (
                patient.sn.toLowerCase().includes(searchTerm) ||
                patient.patient_id.toLowerCase().includes(searchTerm) ||
                patient.fullname.toLowerCase().includes(searchTerm) ||
                patient.email.toLowerCase().includes(searchTerm) ||
                patient.phonenumber.toLowerCase().includes(searchTerm) ||
                patient.date.toLowerCase().includes(searchTerm) ||
                patient.status_id.toLowerCase().includes(searchTerm) ||
                patient.last_login.toLowerCase().includes(searchTerm)
            ));




    // Displaying search results in the table
    filteredPatients.forEach(patient => {
    const row = searchResultsBody.insertRow();
    row.insertCell(0).textContent = patient.sn;
    row.insertCell(1).textContent = patient.patient_id;
    row.insertCell(2).textContent = patient.fullname;
    // row.insertCell(3).textContent = patient.email;
    row.insertCell(3).textContent = patient.phonenumber;
    row.insertCell(4).textContent = patient.date;

    const statusCell = row.insertCell(5);
    const icon = document.createElement("i");
    icon.className = "fa fa-circle"; // Replace with the desired Font Awesome icon class

    if (patient.status_id === "1") {
        icon.style.color = "rgb(0, 255, 0)";
    } else if (patient.status_id === "2") {
        icon.style.color = "rgb(255, 226, 0";
    }

    statusCell.appendChild(icon);
});

    })
    .catch(error => {
        console.error('Error during AJAX request:', error);
    });
}





////////////////////////////////////////////////



// function _next_page(next_id) {
//     $('.login-div').hide();
//     $('#'+next_id).fadeIn(1000);
//     }






// function next_page(patient_id) {
//     var spatient_id = patient_id.getAttribute('data-patient-id');
//     var action = 'patients_page';
//     var dataString = 'action=' + action + '&patient_id=' + spatient_id;

//     $.ajax({
//         type: "POST",
//         url: "../../backend/config/code.php",
//         data: dataString,
//         dataType: 'json',
//         cache: false,
//         success: function(data) {
//             alert(data);
//             var scheck = data.check;
//             if (scheck === spatient_id) {
//                 // window.alert("User is active");
//                 window.alert(spatient_id);
//                 console.log(patient_id);
//                // window.location.href = "patients_profile.php"; // Redirect after success
//                window.location.href = "patients_profile.php?patient_id=" + spatient_id;

//             } else if (scheck === 'suspended') {
//                 window.alert("User account is suspended");
//             } else {
//                 window.alert("Invalid email address");
//             }
//         },
//         error: function(jqXHR, textStatus, errorThrown) {
//             // Handle AJAX request errors
//             console.error("AJAX Error: " + textStatus, errorThrown);
//             window.alert("An error occurred during the request");
//         }
//     });




function next_page(patient_id) {
    var spatient_id = patient_id.getAttribute('data-patient-id');
    var action = 'patients_profile';

    // Create a form dynamically
    var form = document.createElement('form');
    form.method = 'post';
    form.action = 'patients_profile.php';

    // Creates a hidden input field for patient_id
    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'patient_id';
    input.value = spatient_id;

    // Append the input to the form
    form.appendChild(input);

    // Append the form to the body and submit it
    document.body.appendChild(form);
    form.submit();
}
























    



