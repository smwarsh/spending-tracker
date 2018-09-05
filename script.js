"use strict";

function Transaction(info, price, date, note = '') {
  this.info = info;
  this.price = price;
  this.date = date;
  this.note = note;
}

function Category() {
  // Should I put all the below methods in the category object into a constructor?
}

var category = {
  transactions: [], // later, add objects to this array
  
  displayTransactions: function () {
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
    } else {
      console.log('You don\'t have any transactions');
    }
  },
  
  addTransaction: function (info, price, date, note = '') {
    console.log(this);
    this.transactions.push(new Transaction(info, price, date, note));
    this.displayTransactions();
  },
  
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

var income = {
  salary: Object.create(category),
  cashBack: Object.create(category),
  gifts: Object.create(category),
  other: Object.create(category)
}

var expense = {
  food: Object.create(category),
  transportation: Object.create(category),
  trips: Object.create(category),
  gifts: Object.create(category),
  health: Object.create(category),
  beauty: Object.create(category),
  recreationalActivities: Object.create(category),
  shopping: Object.create(category),
  sports: Object.create(category),
  pets: Object.create(category),
  education: Object.create(category),
  entertainment: Object.create(category),
  work: Object.create(category),
  other: Object.create(category)
}


/*
 * If I type in...
 * expense.food.addTransaction('Max Brenner', 7, 20180901, 'chocolate pizza');
 * Ugh! It adds the transaction to every instance of a category object in the expense AND income objects.
 * The 'this' keyword must be referring back to all these objects at once.
 * The one option I can see is to change the category object to a constructor. I'll try this tomorrow.
 */