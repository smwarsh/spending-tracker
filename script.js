/**
 *  Many basic structural elements of this code are taken from a code sample
 *  given to me by @cjaredm on Twitter.
 *  The code can be found on Code Sandbox at this link as of Sep 10, 2018:
 *  https://codesandbox.io/s/0x635kqjnw?expanddevtools=1&hidenavigation=1
 **/

"use strict";

let id = 0;

function addTransaction(category, data) { // takes 2 objects
  return (category.transactions = [
    ...category.transactions,
    {...data, id: ++id}
    ]);
}

function deleteTransaction(category, transactionId) {
  category.transactions = category.transactions.filter(
    transaction => transaction.id !== transactionId
  );
}

function findTransaction(transactions, id) {
  return transactions.find(transaction => transaction.id === id);
}

function editTransaction(category, id, updatesToTransaction) {
  const currentTransaction = findTransaction(category.transactions, id);
  const transactionIndex = category.transactions.findIndex(
    transaction => transaction.id === id
  );
  const updatedTransaction = {...currentTransaction, ...updatesToTransaction};
  category.transactions[transactionIndex] = updatedTransaction;
}

function displayCategory(category) {
  if (category.transactions.length < 1) {
    console.log("There are no transactions in this category");
  } else {
    console.table(category.transactions);
  }
}

function sortCategoryByDate(category) {
  category.transactions.sort((a, b) => {
    if(a.date > b.date) {
      return 1; // sort b to an index lower than a
    } else if(a.date < b.date) {
      return -1; // sort a to an index lower than b
    } else {
      return 0; // leave a and b unchanged with respect to each other but sorted with respect to all different elements
    }
  });
}

// returns a string
function totalUpCategory(category) {
  const totalPrice = category.transactions.reduce((total, transaction) => {
    return total + transaction.price;
  }, 0);
  return roundToPrice(totalPrice);
}

// helper function to round number correctly to the second decimal place
// source: http://www.jacklmoore.com/notes/rounding-in-javascript/
function roundToPrice(value) {
  return (Number(Math.round(value+'e'+2)+'e-'+2)).toFixed(2);
}

// hard code income and expense for now
const income = {
  salary: { transactions: [] },
  cashBack: { transactions: [] },
  gifts: { transactions: [] },
  other: { transactions: [] }
}

const expense = {
  food: { transactions: [
    {info: 'Mocha coffee', price: 4.42, date: 20180905},
    {info: 'Lunch with N', price: 16.86, date: 20180907},
    {info: 'Bagels for me & M', price: 4.80, date: 20180901},
    {info: 'Sushi with S', price: 12.00, date: 20180910},
    {info: 'Salad bar with M', price: 8.52, date: 20180901},
    {info: 'Chocolate pizza with M', price: 7.00, date: 20180901},
    {info: 'Ice cream with E', price: 5.00, date: 20180908},
    {info: 'Muffin', price: 2.67, date: 20180905},
    {info: 'Lunch with S', price: 13.96, date: 20180905}
  ] },
  transportation: { transactions: [
    {info: 'Gas @ $3.19', price: 36.61, date: 20180904},
    {info: 'Gas @ $3.19', price: 20.94, date: 20180906},
    {info: 'Gas @ $3.17', price: 28.45, date: 20180904}
  ] },
  trips: { transactions: [] },
  gifts: { transactions: [] },
  health: { transactions: [] },
  beauty: { transactions: [] },
  recreationalActivities: { transactions: [] },
  shopping: { transactions: [] },
  sports: { transactions: [] },
  pets: { transactions: [] },
  education: { transactions: [] },
  entertainment: { transactions: [] },
  work: { transactions: [] },
  other: { transactions: [] }
}