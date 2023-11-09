
   let firstTimerTextChange = document.querySelector('#timer');
   firstTimerTextChange.style.color = '#ff0000';
    //entire accordion 1
   const clickEntireAccordionOpen1 = document.querySelector("#click-open-button-accordion1");
   const clickEntireAccordionClose1 = document.querySelector("#click-close-button-accordion1");
   const entireAccordion1 = document.querySelector("#entire-accordion1");
   const openAccordion1 = document.querySelector('#open-accordion-one');
    const closeAccordion1 = document.querySelector('#close-accordion-one');
    const openAccordion2 = document.querySelector('#open-accordion-two');
    const closeAccordion2 = document.querySelector('#close-accordion-two');
    const openAccordion3 = document.querySelector('#open-accordion-three');
    const closeAccordion3 = document.querySelector('#close-accordion-three');
    const openAccordion4 = document.querySelector('#open-accordion-four');
    const closeAccordion4 = document.querySelector('#close-accordion-four');
    const openAccordion5 = document.querySelector('#open-accordion-five');
    const closeAccordion5 = document.querySelector('#close-accordion-five');
    const openAccordion6 = document.querySelector('#open-accordion-six');
    const closeAccordion6 = document.querySelector('#close-accordion-six');
    const openAccordion7 = document.querySelector('#open-accordion-seven');
    const closeAccordion7 = document.querySelector('#close-accordion-seven');
    const openAccordion8 = document.querySelector('#open-accordion-eight');
    const closeAccordion8 = document.querySelector('#close-accordion-eight');
    const openAccordion9 = document.querySelector('#open-accordion-nine');
    const closeAccordion9 = document.querySelector('#close-accordion-nine');
    const openAccordion10 = document.querySelector('#open-accordion-ten');
    const closeAccordion10 = document.querySelector('#close-accordion-ten');
    const openAccordion11 = document.querySelector('#open-accordion-eleven');
    const closeAccordion11 = document.querySelector('#close-accordion-eleven');
    const accordion1 =  document.querySelector('#accordion-one');
    const accordion2 =  document.querySelector('#accordion-two');
    const accordion3 =  document.querySelector('#accordion-three');
    const accordion4=  document.querySelector('#accordion-four');
    const accordion5=  document.querySelector('#accordion-five');
    const accordion6=  document.querySelector('#accordion-six');
    const accordion7=  document.querySelector('#accordion-seven');
    const accordion8=  document.querySelector('#accordion-eight');
    const accordion9=  document.querySelector('#accordion-nine');
    const accordion10=  document.querySelector('#accordion-ten');
    const accordion11=  document.querySelector('#accordion-eleven');

    //updating the click events of open of the entire accordion
        clickEntireAccordionOpen1.addEventListener('click', function(){
        entireAccordion1.classList.remove("hide");
        clickEntireAccordionOpen1.style.display = "none";
        clickEntireAccordionClose1.style.display = "block";
        //closes the entireaccordion 2 a open dropdown icon when you click on the first entire accordion element
        entireAccordion2.classList.add("hide");
        clickEntireAccordionOpen2.style.display = "block";
        clickEntireAccordionClose2.style.display = "none";
        //closes the entireaccordion 3 and return a open dropdown icon when you click on the first entire accordion element
        entireAccordion3.classList.add("info-hidden");    
        clickEntireAccordionOpen3.style.display = "block";
        clickEntireAccordionClose3.style.display = "none";
    });
    //updating the click events of close of the entire accordion
    clickEntireAccordionClose1.addEventListener('click', function(){
        entireAccordion1.classList.add("hide");
        clickEntireAccordionOpen1.style.display = "block";
        clickEntireAccordionClose1.style.display = "none";
    })
    //updating both the close and open event of the accordion
    openAccordion1.addEventListener('click', function(){
        accordion1.classList.remove('hidden');
        openAccordion1.style.display = "none";
        closeAccordion1.style.display = "block";
    });
    closeAccordion1.addEventListener('click', function(){
        accordion1.classList.add('hidden');
        openAccordion1.style.display = "block";
        closeAccordion1.style.display = "none";
    })
    openAccordion2.addEventListener('click', function(){
        accordion2.classList.remove('hidden');
        openAccordion2.style.display = "none";
        closeAccordion2.style.display = "block";
    })
    closeAccordion2.addEventListener('click', function(){
        accordion2.classList.add('hidden');
        openAccordion2.style.display = "block";
        closeAccordion2.style.display = "none";
    })
    openAccordion3.addEventListener('click', function(){
        accordion3.classList.remove('hidden');
        openAccordion3.style.display = "none";
        closeAccordion3.style.display = "block";
    });
    closeAccordion3.addEventListener('click', function(){
        accordion3.classList.add('hidden');
        openAccordion3.style.display = "block";
        closeAccordion3.style.display = "none";
    });

    openAccordion4.addEventListener('click', function(){
        accordion4.classList.remove('hidden');
        openAccordion4.style.display = "none";
        closeAccordion4.style.display = "block";
    });

    closeAccordion4.addEventListener('click', function(){
        accordion4.classList.add('hidden');
        openAccordion4.style.display = "block";
        closeAccordion4.style.display = "none";
    });
    openAccordion5.addEventListener('click', function(){
        accordion5.classList.remove('hidden');
        openAccordion5.style.display = "none";
        closeAccordion5.style.display = "block";
    });

    closeAccordion5.addEventListener('click', function(){
        accordion5.classList.add('hidden');
        openAccordion5.style.display = "block";
        closeAccordion5.style.display = "none";
    });
    openAccordion6.addEventListener('click', function(){
        accordion6.classList.remove('hidden');
        openAccordion6.style.display = "none";
        closeAccordion6.style.display = "block";
    });

    closeAccordion6.addEventListener('click', function(){
        accordion6.classList.add('hidden');
        openAccordion6.style.display = "block";
        closeAccordion6.style.display = "none";
    });
    openAccordion7.addEventListener('click', function(){
        accordion7.classList.remove('hidden');
        openAccordion7.style.display = "none";
        closeAccordion7.style.display = "block";
    });

    closeAccordion7.addEventListener('click', function(){
        accordion7.classList.add('hidden');
        openAccordion7.style.display = "block";
        closeAccordion7.style.display = "none";
    });
    openAccordion8.addEventListener('click', function(){
        accordion8.classList.remove('hidden');
        openAccordion8.style.display = "none";
        closeAccordion8.style.display = "block";
    });

    closeAccordion8.addEventListener('click', function(){
        accordion8.classList.add('hidden');
        openAccordion8.style.display = "block";
        closeAccordion8.style.display = "none";
    });
    openAccordion9.addEventListener('click', function(){
        accordion9.classList.remove('hidden');
        openAccordion9.style.display = "none";
        closeAccordion9.style.display = "block";
    });

    closeAccordion9.addEventListener('click', function(){
        accordion9.classList.add('hidden');
        openAccordion9.style.display = "block";
        closeAccordion9.style.display = "none";
    });
    openAccordion10.addEventListener('click', function(){
        accordion10.classList.remove('hidden');
        openAccordion10.style.display = "none";
        closeAccordion10.style.display = "block";
    });

    closeAccordion10.addEventListener('click', function(){
        accordion10.classList.add('hidden');
        openAccordion10.style.display = "block";
        closeAccordion10.style.display = "none";
    });
    openAccordion11.addEventListener('click', function(){
        accordion11.classList.remove('hidden');
        openAccordion11.style.display = "none";
        closeAccordion11.style.display = "block";
    });

    closeAccordion11.addEventListener('click', function(){
        accordion11.classList.add('hidden');
        openAccordion11.style.display = "block";
        closeAccordion11.style.display = "none";
    });

//entire accordion 2
   const clickEntireAccordionOpen2 = document.querySelector("#click-open-button-accordion2");
   const clickEntireAccordionClose2 = document.querySelector("#click-close-button-accordion2")
   const entireAccordion2 = document.querySelector("#entire-accordion2");
   const openVitalAccordion1 = document.querySelector("#open-dropdown-vital1");
   const closeVitalAccordion1 = document.querySelector("#close-dropdown-vital1");
   const impatientAccordion = document.querySelector(".impatient-accordion");
   const openVitalAccordion2 = document.querySelector("#open-dropdown-vital2");
   const closeVitalAccordion2 = document.querySelector("#close-dropdown-vital2");
   const outpatientAccordion = document.querySelector(".outpatient-accordion");

  
    
    clickEntireAccordionOpen2.addEventListener('click', function(){
        entireAccordion2.classList.remove("hide");
        clickEntireAccordionOpen2.style.display = "none";
        clickEntireAccordionClose2.style.display = "block";
        //closes the entireaccordion 1 an open dropdown icon when you click on the first entire accordion element
        entireAccordion1.classList.add("hide");
        clickEntireAccordionOpen1.style.display = "block";
        clickEntireAccordionClose1.style.display = "none";
        //closes the entireaccordion 3 an open dropdown icon when you click on the first entire accordion element
        entireAccordion3.classList.add("info-hidden");
        clickEntireAccordionOpen3.style.display = "block";
        clickEntireAccordionClose3.style.display = "none";
    })
    clickEntireAccordionClose2.addEventListener('click', function(){
        entireAccordion2.classList.add("hide");
        clickEntireAccordionOpen2.style.display = "block";
        clickEntireAccordionClose2.style.display = "none";
    })

    openVitalAccordion1.addEventListener('click', function(){
        impatientAccordion.classList.remove("hide-impatient");
        openVitalAccordion1.style.display = "none";
        closeVitalAccordion1.style.display = "block";
    });
    closeVitalAccordion1.addEventListener('click', function(){
        impatientAccordion.classList.add("hide-impatient");
        openVitalAccordion1.style.display = "block";
        closeVitalAccordion1.style.display = "none";
    });

    openVitalAccordion2.addEventListener('click', function(){
        outpatientAccordion.classList.remove("hide-outpatient");
        openVitalAccordion2.style.display = "none";
        closeVitalAccordion2.style.display = "block";
    })

    closeVitalAccordion2.addEventListener('click', function(){
        outpatientAccordion.classList.add("hide-outpatient");
        openVitalAccordion2.style.display = "block";
        closeVitalAccordion2.style.display = "none";
    });

    //entire accordion 3

    const clickEntireAccordionOpen3 = document.querySelector("#click-open-button-accordion3");
    const clickEntireAccordionClose3 = document.querySelector("#click-close-button-accordion3");
    const entireAccordion3 = document.querySelector("#entire-accordion3");

    
        clickEntireAccordionOpen3.addEventListener("click", function(){
        entireAccordion3.classList.remove("info-hidden");
        clickEntireAccordionOpen3.style.display = "none";
        clickEntireAccordionClose3.style.display = "block";
        //closes the entireaccordion 1 a open dropdown icon when you click on the first entire accordion element
        entireAccordion1.classList.add("hide");
        clickEntireAccordionOpen1.style.display = "block";
        clickEntireAccordionClose1.style.display = "none";
        //closes the entireaccordion 2 a open dropdown icon when you click on the first entire accordion element
        entireAccordion2.classList.add("hide");
        clickEntireAccordionOpen2.style.display = "block";
        clickEntireAccordionClose2.style.display = "none";



        })
        clickEntireAccordionClose3.addEventListener("click", function(){
            entireAccordion3.classList.add("info-hidden");
            clickEntireAccordionOpen3.style.display = "block";
            clickEntireAccordionClose3.style.display = "none";
        })
        
   //BACK ARROW TO THE DASHBOARD
   function backWardArrow(){
    var urlBackwardArrow = 'patients.php';
    window.parent(location=(urlBackwardArrow));
  
}
    
    
////////////////////////////////////////////////////


//////////////tomzy's script 


function patients_profile_page(patient_id) {
    // var patient_id = row.getAttribute('data-patient-id');
    var action = 'patients_page';
    var dataString = 'action=' + action + '&patient_id=' + patient_id;

    $.ajax({
        type: "POST",
        url: "../../backend/config/code.php",
        data: dataString,
        dataType: 'json',
        cache: false,
        success: function(data) {
            // Handle the response from the server
            // You can use the 'patient_id' sent from the server if needed
            var receivedPatientId = data.patient_id;
            console.log(receivedPatientId);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // Handle AJAX request errors
            console.error("AJAX Error: " + textStatus, errorThrown);
        }
    });
}

