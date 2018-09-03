"use strict";

function Transaction(info, price, date, note = '') {
  this.info = info;
  this.price = price;
  this.date = date;
  this.note = note;
}

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
    this.transactions.push(
    //   {
    //   info: info,
    //   price: price,
    //   date: date,
    //   note: note
    // }
      new Transaction(info, price, date, note)
    );
    this.displayTransactions();
  }, // end addTransaction method
  
  deleteTransaction: function (position) {
    this.transactions.splice(position, 1);
    this.displayTransactions();
  },
  
  editTransaction: function (position, info = '', price = '', date = '', note = '') {
    
    var itemToEdit;
    
    // error handling - make sure given valid position
    if (position < this.transactions.length) {
      itemToEdit = this.transactions[position];
    } else {
      console.log("Invalid position input");
      return;
    }
    
    // allows edits to any number of properties
    if (info !== '') {
      // update info
      itemToEdit.info = info;
    }
    if (price !== '') {
      itemToEdit.price = parseFloat(price);
    }
    if (date !== '') {
      itemToEdit.date = parseInt(date);
    }
    if (note !== '') {
      itemToEdit.note = note;
    }
    
    this.displayTransactions();
  }, // end editTransaction method
  
  clearNote: function (position) {
    this.transactions[position].note = '';
    this.displayTransactions();
  }
};

var spendType = {
  incomeCategories: [],
  expenseCategories: []
  
  
  // populateIncomeCategories
  // create category objects called salary, cashBack, gifts, other
  // put them in this.incomeCategories
};




