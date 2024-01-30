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
    var printWindow = window.open('', '_blank');
    
    printWindow.document.write('<html><head><title>Print Div Content</title></head><body>');
    printWindow.document.write(printContents);
    printWindow.document.write('</body></html>');

    printWindow.document.close();
    printWindow.print();
}