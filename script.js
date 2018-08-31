// var transaction = {
//   info: 'Nissan gas @ $3.13',
//   price: 32.72,
//   date: 20180828,
//   displayTransaction: function () {
//     console.log(this);
//   }
// };


// OR 

var category = {
  transactions: [], // later, add objects to this array
  
  displayTransactions: function () {
    // print transaction information to the console
    if (this.transactions.length > 0) {
      console.log('My Transactions:');
      for (var i = 0; i < this.transactions.length; i++) {
        console.log('Transaction',
                    i,
                    '-',
                    this.transactions[i].info,
                    this.transactions[i].price,
                    this.transactions[i].date,
                    this.transactions[i].note);
      } // end for loop
    } else { // end if statement
      console.log('You don\'t have any transactions');
    } // end else statement
  }, // end displayTransaction method
  
  addTransaction: function (info, price, date, note = '') {
    this.transactions.push({
      info: info,
      price: price,
      date: date,
      note: note
    });
    this.displayTransactions();
  }, // end addTransaction method
  
  deleteTransaction: function (position) {
    this.transactions.splice(position, 1);
    this.displayTransactions();
  }
};