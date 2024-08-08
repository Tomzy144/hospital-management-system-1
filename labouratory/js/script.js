
///////////////////////////////////////
// Modal window
const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');




const openModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.remove('hidden');
  overlay.classList.remove('hidden');
};


const closeModal = function (modalId) {
  const modal = document.getElementById(modalId);
  
  modal.classList.add('hidden');
  overlay.classList.add('hidden');
};
//////////////////////////////////////




const sections = document.querySelectorAll('.section');
const allProfiles = document.querySelectorAll('.allProfiles');
const links = document.querySelectorAll('.sidebar-body ul li');

function toggleSidebarLinks(clickedLink){
    links.forEach(link => link.classList.remove('active'));
    clickedLink.classList.add('active');
 }
links.forEach(link => {
    link.addEventListener('click', function() {
        toggleSidebarLinks(this);
    });
});
/////////////////////////////////////////////////////

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
     
     //PROFILE IMAGE
     function displayUserProfile(){
        document.querySelector(".profile_account").classList.toggle("hide");
    };

    
function appoitment_list_section(){
    $(".appoitment_section").removeClass('hide')
    $(".lab_input").addClass("hide");
    $('.approved_appoitment').addClass('hide')
}

function approved_appoitment__section(){
    $('.approved_appoitment').removeClass('hide')
    $('.appoitment_section').addClass('hide')
    $('.lab_input').addClass('hide')
}

function uploadResult(){
$('.result').removeClass('hide')
$('.lab_input').removeClass('hide')
$('.lab_container').addClass('hide')
}
function closeResult(){
    $('.result').addClass('hide')
$('.lab_input').addClass('hide')
$('.lab_container').addClass('hide')
}
        //ADD THE AMOUNT ON WHICH CLICKED TO THE LIST OF RECEIPT
        const checkboxes = document.querySelectorAll(".checkbox");
        checkboxes.forEach(function(checkbox){
        checkbox.checked = false;
        });
        function update_table(){
                const tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
                
                tableBody.innerHTML = "";
                const checkboxes = document.querySelectorAll(".checkbox");
                checkboxes.forEach(function(checkbox){
                        if(checkbox.checked){
                                  // Create a new row
                                var newRow = tableBody.insertRow();

                        // Insert cells with checkbox value and label
                        var cell1 = newRow.insertCell(0);
                         cell1.textContent = checkbox.parentNode.textContent.trim().replace(/[^a-zA-Z\s]/g, '');
                        var cell2 = newRow.insertCell(1);
                        cell2.textContent = checkbox.value;
                        }
                })
        }


//SUM ALL THE LAB TEST PRICES
window.onload = function() {
        const checkboxs = document.querySelectorAll(".checkbox");
        function updateSum(){
                let sum = 0;
        checkboxs.forEach(function(checkbox){
                      if(checkbox.checked){
                        sum += parseInt(checkbox.value, 10);
                      }
                      let testSum = document.querySelector("#totalLabTest");
                    testSum.textContent =  `₦ ${new Intl.NumberFormat('en-NG').format((sum))}`
        })
        }
        checkboxs.forEach(function(checkbox){
                checkbox.addEventListener('change', ()=>{
                        update_table();
                        updateSum();
                })
        })
}

//TEST  BOOKING

function uncheckLabTest(){
        const checkboxs = document.querySelectorAll(".checkbox");
        checkboxs.forEach(function(checkbox){
              checkbox.checked = false;
                })
}


function showtestBooking(){
    openModal('test--booking');
}
function collapseTestBooking(){
    closeModal('test--booking');
}

   


function click_labouratory_examination(patient_id){
    $(".appoitment_section").addClass("hide");
    $(".lab_input ").removeClass("hide");
    $('.approved_appoitment').addClass('hide')
    
}

function accept(patient_Id) {
    confirmDialog("Are you sure you want to accept this patient?", () => {
      $('.all_sections_input').fadeIn(500);
  
      // Construct data string to send in the AJAX request
      var dataString = 'patient_Id=' + patient_Id;
  
      // Perform AJAX request
      $.ajax({
        type: "POST", // HTTP method
        url: 'config/display.php', // URL of the PHP script
        data: dataString, // Data to send with the request
        cache: false, // Disable caching
        success: function(html) {
          $('.search_bar_container').addClass('hide');
          // On success, update content of elements with class 'all_sections_input' with the received HTML
          $('.all_sections_input').html(html);
  
          // Hide container with ID 'appointmentDetailsContainer'
          var container = document.getElementById('appointmentDetailsContainer');
          container.style.display = "none";
  
          // Remove 'hide' class from elements with class 'all_sections_input'
          var hidden = document.querySelector(".all_sections_input");
          hidden.classList.remove("hide");
        }
      });
    });
  }


//Lab  Inputs
//For immunoassay_section Dropdown
function form1(){
    document.querySelector(".form1").classList.toggle("hidden");
document.querySelector("#open_id_1").style.display = "none";
document.querySelector("#close_id_1").style.display = "block";
    if(document.querySelector(".form1").classList.contains("hidden")){
        document.querySelector("#close_id_1").style.display = "none";
        document.querySelector("#open_id_1").style.display = "block";
    }
};

//For immunoassay_section Dropdown
function form2 () {
    document.querySelector(".form2").classList.toggle("hidden");
    document.querySelector("#open_id_2").style.display = "none";
    document.querySelector("#close_id_2").style.display = "block";
    if(document.querySelector(".form2").classList.contains("hidden")){
        document.querySelector("#close_id_2").style.display = "none";
        document.querySelector("#open_id_2").style.display = "block";
    }
};


//For thyroid_section Dropdown
function form3(){
    document.querySelector(".form3").classList.toggle("hidden");
    document.querySelector("#open_id_3").style.display = "none";
    document.querySelector("#close_id_3").style.display = "block";
    if(document.querySelector(".form3").classList.contains("hidden")){
        document.querySelector("#close_id_3").style.display = "none";
        document.querySelector("#open_id_3").style.display = "block";
    }
};


//For tumor_section Dropdown
function form4() {

    document.querySelector(".form4").classList.toggle("hidden");
    document.querySelector("#open_id_4").style.display = "none";
    document.querySelector("#close_id_4").style.display = "block";
    if(document.querySelector(".form4").classList.contains("hidden")){
        document.querySelector("#close_id_4").style.display = "none";
        document.querySelector("#open_id_4").style.display = "block";
    }
};


//For blood_section Dropdown
function form5(){
    document.querySelector(".form5").classList.toggle("hidden");
    document.querySelector("#open_id_5").style.display = "none";
    document.querySelector("#close_id_5").style.display = "block";
    if(document.querySelector(".form5").classList.contains("hidden")){
        document.querySelector("#close_id_5").style.display = "none";
        document.querySelector("#open_id_5").style.display = "block";
    }
};


//For food_section Dropdown
function form6(){
    document.querySelector(".form6").classList.toggle("hidden");
    document.querySelector("#open_id_6").style.display = "none";
    document.querySelector("#close_id_6").style.display = "block";
    if(document.querySelector(".form6").classList.contains("hidden")){
        document.querySelector("#close_id_6").style.display = "none";
        document.querySelector("#open_id_6").style.display = "block";
    }
};

//For microbiology_section Dropdown
function form7(){
    document.querySelector(".form7").classList.toggle("hidden");
    document.querySelector("#open_id_7").style.display = "none";
    document.querySelector("#close_id_7").style.display = "block";
    if(document.querySelector(".form7").classList.contains("hidden")){
        document.querySelector("#close_id_7").style.display = "none";
        document.querySelector("#open_id_7").style.display = "block";
    }
};


//For histopathology Dropdown
function form8(){
    document.querySelector(".form8").classList.toggle("hidden");
    document.querySelector("#open_id_8").style.display = "none";
    document.querySelector("#close_id_8").style.display = "block";
    if(document.querySelector(".form8").classList.contains("hidden")){
        document.querySelector("#close_id_8").style.display = "none";
        document.querySelector("#open_id_8").style.display = "block";
    }
};

//For haematology Dropdown
function form9(){
    document.querySelector(".form9").classList.toggle("hidden");
    document.querySelector("#open_id_9").style.display = "none";
    document.querySelector("#close_id_9").style.display = "block";
    if(document.querySelector(".form9").classList.contains("hidden")){
        document.querySelector("#close_id_9").style.display = "none";
        document.querySelector("#open_id_9").style.display = "block";
    }
};

function bookNow() {
    var action = 'bookLabouratoryTest';
    var dataTable = document.querySelector("#dataTable tbody");
    var totalLabTestElement = document.getElementById('totalLabTest');
    var patient_id = document.getElementById('patient_id');
    var totalLabTest = totalLabTestElement.textContent || totalLabTestElement.innerText;
    console.log(totalLabTest)
    var tests = {};
  
    dataTable.querySelectorAll('tr').forEach(function(row) {
      var test = row.cells[0].textContent;
      var amount = row.cells[1].textContent;
      tests[test] = amount;
    });
  
    var data = { 
      action: action, 
      totalAmount: totalLabTest, 
      tests: tests,
      patient_id:patient_id
    };
  
    $.ajax({
      type: 'POST',
      url: "config/code.php",
      data: JSON.stringify(data),
      cache: false,
      contentType: 'application/json',
      dataType: 'json',
      success: function (response) {
        if (response.success) {
         alert("Lab test booked");
        } else {
            alert('Error:', response.message);
        }
      },
      error: function (xhr, status, error) {
        console.error('AJAX Error:', status, error);
      },
    });
  }