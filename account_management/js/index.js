//PROFILE IMAGE
const profile_container  =  document.querySelector(".profile_account");
const click_icon_for_profile = ()=>{
    profile_container.classList.toggle("hide");
};

// PENDING TRANSACTIONAND SUCCESSFUL TRANSACTION SECTION
const pending_transaction = ()=>{
    document.querySelector(".transaction_Section").style.display = "flex";
    document.querySelector(".successful_transaction_history").classList.add("hide");
}
// SUCCESSFUL TRANSACTION HISTORY SECTION
const successful_transaction_history = ()=>{
    document.querySelector(".transaction_Section").style.display = "none";
    document.querySelector(".successful_transaction_history").classList.remove("hide");
}

const check_cash_or_pos = ()=>{
    document.querySelector(".overlay").classList.remove("hide");
    document.querySelector(".check_cash_pos").classList.remove("hide");

}
const close_check_cash_or_pos = ()=>{
    document.querySelector(".overlay").classList.add("hide");
    document.querySelector(".check_cash_pos").classList.add("hide");

}
const close_print_div = ()=>{
    document.querySelector(".overlay").classList.remove("hide");
    document.querySelector(".check_cash_pos").classList.remove("hide");
    document.querySelector(".receipt_printing").classList.add("hide");


}

//PRINTING SECTION

//SHOW PRINT receipt
const show_print_receipt = ()=>{
    document.querySelector(".overlay").classList.remove("hide");
    document.querySelector(".check_cash_pos").classList.add("hide");
    document.querySelector(".receipt_printing").classList.remove("hide");
}


document.addEventListener('DOMContentLoaded', function(){

//PENDING TRANSACTIONS
    //Created an Array that collects all the element and value, i used object to get the values for each of them // KINGSLEY CODE LINE
    const pendingTransaction = [
        {number:"1", imageUrl:'../Images/imaculater.jpg', name_id:{name:"Kingsley Effiong", id:"PAT000932"}, date_time:{date:"20-08-2024", time:"12:30PM"}, request_type_amount:{request_type:"Maleria Drug", amount:"40,000.00"}
    },
        {number:"2", imageUrl:'../Images/imaculater.jpg', name_id:{name:"Kingsley Effiong", id:"PAT000932"}, date_time:{date:"20-08-2024", time:"12:30PM"}, request_type_amount:{request_type:"HIV Test", amount:"80,000.00"}
    },
        {number:"3", imageUrl:'../Images/imaculater.jpg', name_id:{name:"Kingsley Effiong", id:"PAT000932"}, date_time:{date:"20-08-2024", time:"12:30PM"}, request_type_amount:{request_type:"Eye Test", amount:"230,000.00"}
    },
        {number:"4", imageUrl:'../Images/imaculater.jpg', name_id:{name:"Kingsley Effiong", id:"PAT000932"}, date_time:{date:"20-08-2024", time:"12:30PM"}, request_type_amount:{request_type:"Food Test", amount:"10,000.00"}
    },
        {number:"5", imageUrl:'../Images/imaculater.jpg', name_id:{name:"Kingsley Effiong", id:"PAT000932"}, date_time:{date:"20-08-2024", time:"12:30PM"}, request_type_amount:{request_type:"Nose Drug", amount:"90,000.00"}
    },
        {number:"6", imageUrl:'../Images/imaculater.jpg', name_id:{name:"Kingsley Effiong", id:"PAT000932"}, date_time:{date:"20-08-2024", time:"12:30PM"}, request_type_amount:{request_type:"Ear Drug", amount:"620,000.00"}
    },
        {number:"7", imageUrl:'../Images/imaculater.jpg', name_id:{name:"Kingsley Effiong", id:"PAT000932"}, date_time:{date:"20-08-2024", time:"12:30PM"}, request_type_amount:{request_type:"Teeth Checkup", amount:"412,000.00"}
    },
    ];
    //SET CURRENT INDEXT TO 0, I.e. ARRAY TO 0;
    let currentIndexPen = 0;
    const tableBodyPen = document.querySelector('#pendingTransactions tbody');
    const prevPen = document.querySelector("#prevPen");
    const nextPen = document.querySelector("#nextPen");

    //UPDATING THE TABE BODY
    const updateTablePen = ()=>{
        //SET TABLE BODY TO BLANK
        tableBodyPen.innerHTML ="";
        //SET CURRENT INDEX TO 4 AND GET THE MIN VALUE OF THE PENDING TRANSACTION LENGTH AND STORE IN THE ENDINDEXPEN VAR
        let endIndexPen = Math.min(currentIndexPen + 4, pendingTransaction.length);
        //LOOP THROUGH THE CURRENTINDEX AND CHECK IF THE CURRENTINDEX IS LESS THAN THE MIN VALUE F YES, ITS ITERATE
        for(let i = currentIndexPen; i < endIndexPen; i++){
            //CREATED A TABLEROW FOR THE BODY AND ADDED CELLS TO THEM
            let row  = tableBodyPen.insertRow();
            let cell0 = row.insertCell(0);
            let cell1 = row.insertCell(1);
            let cell2 = row.insertCell(2);
            let cell3 = row.insertCell(3);
            let cell4 = row.insertCell(4);
            let cell5 = row.insertCell(5);

            //ADDED EACH OF THE PENDING TRANSATION ARRAYS TO THE TABLE CELLS
            cell0.innerHTML = pendingTransaction[i].number;
            let ImageEle = document.createElement("img");
            ImageEle.src = pendingTransaction[i].imageUrl;
            cell1.appendChild(ImageEle);
            cell2.innerHTML = `${pendingTransaction[i].name_id.name} <br/> ${pendingTransaction[i].name_id.id}`;
            cell3.innerHTML = `${pendingTransaction[i].date_time.date} <br/> ${pendingTransaction[i].date_time.time}`;
            cell4.innerHTML = `${pendingTransaction[i].request_type_amount.request_type} <br/> ${pendingTransaction[i].request_type_amount.amount}`;

            
            //ACCEPT BUTTON FOR ACCEPTNG TRANSACTION
            let accpetButton = document.createElement('button');
            accpetButton.innerHTML = 'Accept';
            accpetButton.id = "accept_button";
            accpetButton.addEventListener("click", function(){
                check_cash_or_pos();
                //PRINT TRANSATION RECEIPT
                const receipt = [
                    {description: "Purchased on Maleria Drugs", amount: ""},
                ]
                const tableBodyRep = document.querySelector("#tableReceipt tbody");
            
                const updateReceipt = ()=>{
                    tableBodyRep.innerHTML = ""
                    const row = tableBodyRep.insertRow();
                    let cell0 = row.insertCell(0);
                    let cell1 = row.insertCell(1);
                    cell0.innerHTML = `${pendingTransaction[i].request_type_amount.request_type}` 
                    cell1.innerHTML =`${pendingTransaction[i].request_type_amount.amount}`
                  const totalTransaction =   document.querySelector("#total_transaction")
                  totalTransaction.innerHTML =  `${pendingTransaction[i].request_type_amount.amount}`;
                }
                
                updateReceipt()
            });


      

            //REJECT BUTTON FOR REJECTING TRACTION
            let rejectButton = document.createElement('button');
            rejectButton.innerHTML = 'Reject';
            rejectButton.id = "reject_button";
            
            `${cell5.appendChild(accpetButton)} <br/> ${cell5.appendChild(rejectButton)}`;


        }

    };
    updateTablePen();
    
    //RETURN TO THE PREVIOUS INDEX VALUE BY 4
    prevPen.addEventListener('click', function(){
        currentIndexPen = Math.max(currentIndexPen - 4, 0);
        updateTablePen();
    });
    //GO TO THE NEXT VALUE BY 4
    nextPen.addEventListener('click', function(){
        currentIndexPen += 4;
        if(currentIndexPen >= pendingTransaction.length){
            currentIndexPen = 0;
        }
        updateTablePen()
    })

   

});

//SUCCESSFUL CONFIRMED TRANSACTIONS
document.addEventListener('DOMContentLoaded', function(){
    const successfulTransaction = [
        {number: "1", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}
        },
        {number: "2", imageUrl: '../Images/80e729b199b61a6c183b85263d35a6ef.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}
        },
        {number: "3", imageUrl: '../Images/486bb8db10b50c178cc502e861e64daf.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}
        },
        {number: "4", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}
        },
        {number: "5", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "6", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "7", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "8", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "9", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "10", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "11", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "12", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "13", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "14", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
        {number: "15", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"} 
        },
    ];

    let currentIndex = 0;
    const tableBody = document.querySelector("#successfulTransaction tbody");
    const prev = document.querySelector("#prev");
    const next = document.querySelector("#next");


    const updateTable = ()=>{
        //Clear Existing Rows
        tableBody.innerHTML = "";
        //Display transaction base on the current Index
        let  endIndex = Math.min(currentIndex + 5, successfulTransaction.length);
        for(let i = currentIndex; i < endIndex; i++){
            //Display transaction in each row
               let row  = tableBody.insertRow();
               let cell0 = row.insertCell(0);
               let cell1 = row.insertCell(1);
               let cell2 = row.insertCell(2);
               let cell3 = row.insertCell(3);
               let cell4 = row.insertCell(4);
               let cell5 = row.insertCell(5);

               

               //Display transaction in each cell
               
               cell0.innerHTML = successfulTransaction[i].number;
               var imageElement = document.createElement('img');
               imageElement.src = successfulTransaction[i].imageUrl;
               cell1.appendChild(imageElement);
               cell2.innerHTML =`${successfulTransaction[i].name_id.name} <br/>  ${successfulTransaction[i].name_id.id}`
               cell3.innerHTML = `${successfulTransaction[i].date_time.date} <br/> ${successfulTransaction[i].date_time.time}`
               cell4.innerHTML = `${successfulTransaction[i].request_type_amount.request_type} <br/> ${successfulTransaction[i].request_type_amount.amount}`
               var successful_button = document.createElement("button");
               successful_button.textContent = "Successful"
              successful_button.id =  "button_successful";
                successful_button.onclick   = function(){
                    alert("Successful");
                }
                cell5.appendChild(successful_button);
        }
    }
    updateTable();


    prev.addEventListener('click', ()=>{
               // Move to the previous set of transactions
               currentIndex = Math.max(currentIndex - 5, 0);

               // Update the table
               updateTable();
    })

    next.addEventListener('click', ()=>{
        // Move to the next set of transactions
        currentIndex += 5;

        // Check if currentIndex exceeds the array length
        if (currentIndex >= successfulTransaction.length) {
            currentIndex = 0; // Wrap around to the first set of transactions
        }

        // Update the table
        updateTable();
    })

});

