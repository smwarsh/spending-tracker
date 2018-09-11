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

// hard code income and expense for now
const income = {
  salary: { transactions: [] },
  cashBack: { transactions: [] },
  gifts: { transactions: [] },
  other: { transactions: [] }
}

const expense = {
  food: { transactions: [] },
  transportation: { transactions: [] },
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