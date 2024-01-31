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

//SHOW PRINT RECEPIT
const show_print_recepit = ()=>{
    document.querySelector(".overlay").classList.remove("hide");
    document.querySelector(".check_cash_pos").classList.add("hide");
    document.querySelector(".receipt_printing").classList.remove("hide");
}

//PRINT RECEIPT
function printDivContent() {
    var printContents = document.querySelector('.receipt_printing').innerHTML;
    var printWindow = window.open();
       // Link to the external CSS file
    printWindow.document.write('<link rel="stylesheet" href="index.css">');
    printWindow.document.write('<html><head><title>Receipt</title></head><body>');
    printWindow.document.write(printContents);
    printWindow.document.write('</body></html>');

    printWindow.document.close();
    printWindow.print();
    printWindow.close();
}



//PUSHING OLD CONFIRMED TRANSACTIONS TO THE NEXT BUTTON
const button = document.getElementById("successful_button").textContent

document.addEventListener('DOMContentLoaded', function(){
    const successfulTransaction = [
        {number: "1", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button
        },
        {number: "2", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button
        },
        {number: "3", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button
        },
        {number: "4", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button
        },
        {number: "5", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button 
        },
        {number: "6", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button 
        },
        {number: "7", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button 
        },
        {number: "8", imageUrl: '../Images/imaculater.jpg', name_id: {name:"John", id:"PAT00032"}, date_time:{date:"22-09-2024", time:"23:00PM"}, request_type_amount:{request_type:"Maleria Drugs", amount:"30,000.00"}, status_active:button 
        }
    ];

    let currentIndex = 0;
    const tableBody = document.querySelector("#transactionBody tbody");
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
               cell5.innerHTML = successfulTransaction[i].status_active
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


