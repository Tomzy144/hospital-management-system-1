     //PROFILE IMAGE
     function click_icon_for_profile(){
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
                      let testSum = document.querySelector("#total");
                    testSum.textContent = `$${sum}.00` 
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
function show_test_booking(){
        document.querySelector(".test_booking").classList.remove("hide");
}
function hide_test_booking(){
        document.querySelector(".test_booking").classList.add("hide");
        const checkboxs = document.querySelectorAll(".checkbox");
        checkboxs.forEach(function(checkbox){
              checkbox.checked = false;
                })
}
   


function click_labouratory_examination(){
    $(".appoitment_section").addClass("hide");
    $(".lab_input ").removeClass("hide");
    $('.approved_appoitment').addClass('hide')
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

