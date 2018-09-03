"use strict";

function Transaction(info, price, date, note = '') {
  this.info = info;
  this.price = price;
  this.date = date;
  this.note = note;
}

function Category() {
  
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
    this.transactions.push(new Transaction(info, price, date, note));
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
  expenseCategories: [],
  
  // spendType.expenseCategories[0].addTransaction('chocolate pizza', 7, 20180901, 'yum');
  // okay so currently when I do the above line of code, it adds a transaction object to every item in the expenseCategories array
  
  // hard code the categories for now
  populateIncomeCategories: function () {
    var salary = Object.create(category);
    var cashBack = Object.create(category);
    var gifts = Object.create(category);
    var other = Object.create(category);
    
    this.incomeCategories.push(salary); // 0
    this.incomeCategories.push(cashBack); // 1
    this.incomeCategories.push(gifts); // 2
    this.incomeCategories.push(other); // 3
  },
  
  // this is definitely not the best way to do this...
  populateExpenseCategories: function () {
    var food = Object.create(category);
    var transportation = Object.create(category);
    var trips = Object.create(category);
    var gifts = Object.create(category);
    var health = Object.create(category);
    var beauty = Object.create(category);
    var recreationalActivities = Object.create(category);
    var shopping = Object.create(category);
    var sports = Object.create(category);
    var pets = Object.create(category);
    var education = Object.create(category);
    var entertainment = Object.create(category);
    var work = Object.create(category);
    var other = Object.create(category);
    
    this.expenseCategories.push(food); // 0
    this.expenseCategories.push(transportation); // 1
    this.expenseCategories.push(trips); // 2
    this.expenseCategories.push(gifts); // 3
    this.expenseCategories.push(health); // 4
    this.expenseCategories.push(beauty); // 5
    this.expenseCategories.push(recreationalActivities); // 6
    this.expenseCategories.push(shopping); // 7
    this.expenseCategories.push(sports); // 8
    this.expenseCategories.push(pets); // 9
    this.expenseCategories.push(education); // 10
    this.expenseCategories.push(entertainment); // 11
    this.expenseCategories.push(work); // 12
    this.expenseCategories.push(other); // 13
  }

};




