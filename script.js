/**
 *  Many basic structural elements of this code are taken from a code sample
 *  given to me by @cjaredm on Twitter.
 *  The code can be found on Code Sandbox at this link as of Sep 10, 2018:
 *  https://codesandbox.io/s/0x635kqjnw?expanddevtools=1&hidenavigation=1
 **/

"use strict";

let id = 36; // start at the end of the hard-coded transactions

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

// returns a number
function sumOfCategory(category) {
  const totalPrice = category.transactions.reduce(
    (total, transaction) => total + Number(transaction.price),
    0
  );
  return roundToPrice(totalPrice);
}

// helper function to round number correctly to the second decimal place
const roundToPrice = value =>
  Number((Math.round(value * 100) / 100).toFixed(2));

// get a total of prices in income or expense
function sumOfGroup(group) {
  const categories = Object.values(group);
  const sum = categories.reduce(
    (total, category) => total + sumOfCategory(category),
    0
  );
  return roundToPrice(sum);
}

// calculate total gain in money
const totalGain = (income, expense) =>
  roundToPrice(sumOfGroup(income) - sumOfGroup(expense));


// hard code income and expense for now
const income = {
  salary: { transactions: [
    {info: 'Salary', price: 2011.74, date: 20180914, id: 36}
  ] },
  cashBack: { transactions: [] },
  gifts: { transactions: [] },
  other: { transactions: [] }
}

const expense = {
  food: { transactions: [
    {info: 'Mocha coffee', price: 4.42, date: 20180912, id: 1},
    {info: 'Mocha coffee', price: 4.42, date: 20180905, id: 2},
    {info: 'Lunch with NP', price: 16.86, date: 20180907, id: 3},
    {info: 'Bagels for me & MW', price: 4.80, date: 20180901, id: 4},
    {info: 'Sushi with SG', price: 12.00, date: 20180910, id: 5},
    {info: 'Salad bar with MW', price: 8.52, date: 20180901, id: 6},
    {info: 'Chocolate pizza with MW', price: 7.00, date: 20180901, id: 7},
    {info: 'Ice cream with EF', price: 5.00, date: 20180908, id: 8},
    {info: 'Muffin', price: 2.67, date: 20180905, id: 9},
    {info: 'Lunch with SG', price: 13.96, date: 20180905, id: 10},
    {info: 'Groceries', price: 29.10, date: 20180910, id: 11}
  ] },
  transportation: { transactions: [
    {info: 'Metered parking', price: 1.50, date: 20180908, id: 12},
    {info: 'Metered parking', price: 1.50, date: 20180905, id: 13},
    {info: 'Gas @ $3.19', price: 36.61, date: 20180904, id: 14},
    {info: 'Gas @ $3.17', price: 40.51, date: 20180913, id: 15},
    {info: 'Card refill', price: 10.00, date: 20180901, id: 16},
    {info: 'Gas @ $3.19', price: 20.94, date: 20180906, id: 17},
    {info: 'Parking garage', price: 3.00, date: 20180912, id: 18},
    {info: 'Gas @ $3.17', price: 28.46, date: 20180911, id: 19},
    {info: 'Bus to the city', price: 8.00, date: 20180901, id: 20},
    {info: 'Bus from the city', price: 8.00, date: 20180901, id: 21},
    {info: 'Car vent mount for my phone', price: 8.99, date: 20180912, id: 22}
  ] },
  trips: { transactions: [] },
  gifts: { transactions: [
    {info: 'Birthday present for EF', price: 17.95, date: 20180907, id: 23},
    {info: 'Birthday present for MB', price: 14.05, date: 20180912, id: 24}
  ] },
  health: { transactions: [
    {info: 'Boot', price: 15.00, date: 20180904, id: 25},
    {info: 'Therapy', price: 165.00, date: 20180905, id: 26},
    {info: 'Therapy', price: 165.00, date: 20180912, id: 27},
    {info: 'Medicine', price: 4.58, date: 20180908, id: 28}
  ] },
  beauty: { transactions: [] },
  recreationalActivities: { transactions: [
    {info: 'Tickets to a play', price: 211.25, date: 20180907, id: 29}
  ] },
  shopping: { transactions: [
    {info: 'Shirt from Express', price: 35.94, date: 20180901, id: 30},
    {info: 'Shirt from Anthropologie', price: 29.97, date: 20180901, id: 31}
  ] },
  sports: { transactions: [
    {info: 'Gym membership', price: 41.50, date: 20180904, id: 32}
  ] },
  pets: { transactions: [] },
  education: { transactions: [
    {info: 'Group E loans', price: 375.00, date: 20180904, id: 33},
    {info: 'Group E & Group A loans', price: 458.33, date: 20180910, id: 34}
  ] },
  entertainment: { transactions: [
    {info: 'Music streaming subscription', price: 5.32, date: 20180908, id: 35}
  ] },
  work: { transactions: [] },
  other: { transactions: [] }
}