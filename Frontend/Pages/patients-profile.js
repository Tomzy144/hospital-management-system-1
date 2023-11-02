
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
    const accordion1 =  document.querySelector('#accordion-one');
    const accordion2 =  document.querySelector('#accordion-two');
    const accordion3 =  document.querySelector('#accordion-three');

    //updating the click events of open of the entire accordion
        clickEntireAccordionOpen1.addEventListener('click', function(){
        entireAccordion1.classList.remove("hide");
        clickEntireAccordionOpen1.style.display = "none";
        clickEntireAccordionClose1.style.display = "block";
        
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
        })
        clickEntireAccordionClose3.addEventListener("click", function(){
            entireAccordion3.classList.add("info-hidden");
            clickEntireAccordionOpen3.style.display = "block";
            clickEntireAccordionClose3.style.display = "none";
        })
        
 
    
    
