/**
 *  Many basic structural elements of this code are taken from a code sample
 *  given to me by @cjaredm on Twitter.
 *  The code can be found on Code Sandbox at this link as of Sep 10, 2018:
 *  https://codesandbox.io/s/0x635kqjnw?expanddevtools=1&hidenavigation=1
 **/

"use strict";

import * as dateFns from "date-fns";

let id = 49; // start at the end of the hard-coded transactions

// takes 2 objects
function addTransaction(category, data) {
  return (category.transactions = [
    ...category.transactions,
    { ...data, id: ++id }
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
  const updatedTransaction = { ...currentTransaction, ...updatesToTransaction };
  category.transactions[transactionIndex] = updatedTransaction;
}

// delete this soon; i have rewritten it below
function displayCategory(category) {
  const transactions = sortCategoryByDate(category);
  console.log(category.name + ":");
  if (transactions.length < 1) {
    console.log("There are no transactions in this category");
  } else {
    transactions.map(item =>
      console.log(
        item.info + ":",
        "$" + item.price,
        dateFns.format(item.date, "M/D/YYYY")
      )
    );
  }
  console.log();
}

// takes the transactions array of a category
function displayTransactions(transactions) {
  if (transactions.length < 1) {
    console.log("There are no transactions in this category");
  } else {
    transactions.map(item =>
      console.log(
        item.info + ":",
        "$" + item.price,
        dateFns.format(item.date, "M/D/YYYY")
      )
    );
  }
  console.log();
}

function newDisplayCategory(group, startDate, endDate) {
  // still need to sort category by date

  // need this to print the name of the category
  const groupCategories = Object.values(group);
  groupCategories.map(function(category) {
    console.log(`${category.name}:`);
    const filteredTransactions = category.transactions.filter(transaction =>
      // keep everything that isWithinRange
      dateFns.isWithinRange(transaction.date, startDate, endDate)
    );
    displayTransactions(filteredTransactions);
  });
}

function isolateGroupByRange(group, startDate, endDate) {
  const groupCategories = Object.values(group);

  const groupWithinRange = groupCategories.map(category =>
    category.transactions.filter(transaction =>
      // keep everything that isWithinRange
      dateFns.isWithinRange(transaction.date, startDate, endDate)
    )
  );

  // returns an array of Arrays (the categories are not objects anymore)
  return groupWithinRange;

  // i need to make sure this is only a copy, for display purposes
}

// what if we have sortCategoryByDate take an array instead of an object
// would require nested array iteration methods again
// map outside, to map through the categories and access transactions
// sort inside, to sort the transactions

// returns a sorted transactions array of the category
function sortCategoryByDate(category) {
  return category.transactions.sort((a, b) => {
    // a and b have to be dates
    if (dateFns.isDate(a.date) && dateFns.isDate(b.date)) {
      // if a is after b, returns true
      if (dateFns.isAfter(a.date, b.date)) {
        return 1; // sort b to an index lower than a
      } else if (dateFns.isBefore(a.date, b.date)) {
        return -1; // sort a to an index lower than b
      } else {
        return 0; // leave a and b unchanged with respect to each other but sorted with respect to all different elements
      }
    } else {
      console.log("These are not dates...");
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

function displayAllByCategory() {
  const incomeCategories = Object.values(income);
  const expenseCategories = Object.values(expense);

  // find a way to DRY this
  console.log("INCOME");
  incomeCategories.map(category => displayCategory(category));
  console.log("\nEXPENSE");
  expenseCategories.map(category => displayCategory(category));
}

function createIncomeCategory() {
  const emptyIncomeCategory = {
    salary: {
      name: "Salary",
      transactions: []
    },
    cashBack: {
      name: "Cash Back",
      transactions: []
    },
    gifts: {
      name: "Gifts",
      transactions: []
    },
    other: {
      name: "Other",
      transactions: []
    }
  };
  return emptyIncomeCategory;
}

function createExpenseCategory() {
  const emptyExpenseCategory = {
    food: {
      name: "Food",
      transactions: []
    },
    transportation: {
      name: "Transportation",
      transactions: []
    },
    trips: {
      name: "Trips",
      transactions: []
    },
    gifts: {
      name: "Gifts",
      transactions: []
    },
    health: {
      name: "Health",
      transactions: []
    },
    beauty: {
      name: "Beauty",
      transactions: []
    },
    recreationalActivities: {
      name: "Recreational Activities",
      transactions: []
    },
    shopping: {
      name: "Shopping",
      transactions: []
    },
    sports: {
      name: "Sports",
      transactions: []
    },
    pets: {
      name: "Pets",
      transactions: []
    },
    education: {
      name: "Education",
      transactions: []
    },
    entertainment: {
      name: "Entertainment",
      transactions: []
    },
    work: {
      name: "Work",
      transactions: []
    },
    other: {
      name: "Other",
      transactions: []
    }
  };
  return emptyExpenseCategory;
}

// calculate total gain in money
const totalGain = (income, expense) =>
  roundToPrice(sumOfGroup(income) - sumOfGroup(expense));

// hard code income and expense for now
const income = {
  salary: {
    name: "Salary",
    transactions: [
      {
        info: "Salary",
        price: 2011.74,
        date: new Date(2018, 8, 14),
        id: 36
      }
    ]
  },
  cashBack: {
    name: "Cash Back",
    transactions: []
  },
  gifts: {
    name: "Gifts",
    transactions: []
  },
  other: {
    name: "Other",
    transactions: []
  }
};

const expense = {
  food: {
    name: "Food",
    transactions: [
      {
        info: "Mocha coffee",
        price: 4.42,
        date: new Date(2018, 8, 12),
        id: 1
      },
      {
        info: "Mocha coffee",
        price: 4.42,
        date: new Date(2018, 8, 5),
        id: 2
      },
      {
        info: "Lunch with NP",
        price: 16.86,
        date: new Date(2018, 8, 7),
        id: 3
      },
      {
        info: "Bagels for me & MW",
        price: 4.8,
        date: new Date(2018, 8, 1),
        id: 4
      },
      {
        info: "Sushi with SG",
        price: 12.0,
        date: new Date(2018, 8, 10),
        id: 5
      },
      {
        info: "Salad bar with MW",
        price: 8.52,
        date: new Date(2018, 8, 1),
        id: 6
      },
      {
        info: "Chocolate pizza with MW",
        price: 7.0,
        date: new Date(2018, 8, 1),
        id: 7
      },
      {
        info: "Ice cream with EF",
        price: 5.0,
        date: new Date(2018, 8, 8),
        id: 8
      },
      {
        info: "Muffin",
        price: 2.67,
        date: new Date(2018, 8, 5),
        id: 9
      },
      {
        info: "Lunch with SG",
        price: 13.96,
        date: new Date(2018, 8, 5),
        id: 10
      },
      {
        info: "Groceries",
        price: 29.1,
        date: new Date(2018, 8, 10),
        id: 11
      },
      {
        info: "Mint Oreo Blizzard with EF & RI",
        price: 4.35,
        date: new Date(2018, 7, 5),
        id: 46
      },
      {
        info: "Panera Bread with CV",
        price: 7.21,
        date: new Date(2018, 7, 9),
        id: 37
      },
      {
        info: "Bagels for me, ZT, CW",
        price: 5.32,
        date: new Date(2018, 7, 25),
        id: 38
      },
      {
        info: "Pizza with NP",
        price: 4,
        date: new Date(2018, 7, 29),
        id: 39
      },
      {
        info: "Japanese groceries",
        price: 52.45,
        date: new Date(2018, 7, 26),
        id: 40
      }
    ]
  },
  transportation: {
    name: "Transportation",
    transactions: [
      {
        info: "Metered parking",
        price: 1.5,
        date: new Date(2018, 8, 8),
        id: 12
      },
      {
        info: "Metered parking",
        price: 1.5,
        date: new Date(2018, 8, 5),
        id: 13
      },
      {
        info: "Gas @ $3.19",
        price: 36.61,
        date: new Date(2018, 8, 4),
        id: 14
      },
      {
        info: "Gas @ $3.17",
        price: 40.51,
        date: new Date(2018, 8, 13),
        id: 15
      },
      {
        info: "Card refill",
        price: 10.0,
        date: new Date(2018, 8, 1),
        id: 16
      },
      {
        info: "Gas @ $3.19",
        price: 20.94,
        date: new Date(2018, 8, 6),
        id: 17
      },
      {
        info: "Parking garage",
        price: 3.0,
        date: new Date(2018, 8, 12),
        id: 18
      },
      {
        info: "Gas @ $3.17",
        price: 28.46,
        date: new Date(2018, 8, 11),
        id: 19
      },
      {
        info: "Bus to the city",
        price: 8.0,
        date: new Date(2018, 8, 1),
        id: 20
      },
      {
        info: "Bus from the city",
        price: 8.0,
        date: new Date(2018, 8, 1),
        id: 21
      },
      {
        info: "Car vent mount for my phone",
        price: 8.99,
        date: new Date(2018, 8, 12),
        id: 22
      },
      {
        info: "Gas @ $3.13",
        price: 32.72,
        date: new Date(2018, 7, 28),
        id: 41
      },
      {
        info: "Gas @ $2.81 for motorcycle",
        price: 7.3,
        date: new Date(2018, 7, 16),
        id: 42
      }
    ]
  },
  trips: {
    name: "Trips",
    transactions: []
  },
  gifts: {
    name: "Gifts",
    transactions: [
      {
        info: "Birthday present for EF",
        price: 17.95,
        date: new Date(2018, 8, 7),
        id: 23
      },
      {
        info: "Birthday present for MB",
        price: 14.05,
        date: new Date(2018, 8, 12),
        id: 24
      }
    ]
  },
  health: {
    name: "Health",
    transactions: [
      {
        info: "Boot",
        price: 15.0,
        date: new Date(2018, 8, 4),
        id: 25
      },
      {
        info: "Therapy",
        price: 165.0,
        date: new Date(2018, 8, 5),
        id: 26
      },
      {
        info: "Therapy",
        price: 165.0,
        date: new Date(2018, 8, 12),
        id: 27
      },
      {
        info: "Medicine",
        price: 4.58,
        date: new Date(2018, 8, 8),
        id: 28
      },
      {
        info: "Therapy",
        price: 49.5,
        date: new Date(2018, 7, 8),
        id: 43
      }
    ]
  },
  beauty: {
    name: "Beauty",
    transactions: []
  },
  recreationalActivities: {
    name: "Recreational Activities",
    transactions: [
      {
        info: "Tickets to a play",
        price: 211.25,
        date: new Date(2018, 8, 7),
        id: 29
      },
      {
        info: "Movie with CV",
        price: 13,
        date: new Date(2018, 7, 9),
        id: 44
      }
    ]
  },
  shopping: {
    name: "Shopping",
    transactions: [
      {
        info: "Shirt from Express",
        price: 35.94,
        date: new Date(2018, 8, 1),
        id: 30
      },
      {
        info: "Shirt from Anthropologie",
        price: 29.97,
        date: new Date(2018, 8, 1),
        id: 31
      }
    ]
  },
  sports: {
    name: "Sports",
    transactions: [
      {
        info: "Gym membership",
        price: 41.5,
        date: new Date(2018, 8, 4),
        id: 32
      }
    ]
  },
  pets: {
    name: "Pets",
    transactions: [
      {
        info: "Vet",
        price: 78.5,
        date: new Date(2018, 7, 6),
        id: 45
      }
    ]
  },
  education: {
    name: "Education",
    transactions: [
      {
        info: "Group E loans",
        price: 375.0,
        date: new Date(2018, 8, 4),
        id: 33
      },
      {
        info: "Group E & Group A loans",
        price: 458.33,
        date: new Date(2018, 8, 10),
        id: 34
      }
    ]
  },
  entertainment: {
    name: "Entertainment",
    transactions: [
      {
        info: "Music streaming subscription",
        price: 5.32,
        date: new Date(2018, 8, 8),
        id: 35
      }
    ]
  },
  work: {
    name: "Work",
    transactions: []
  },
  other: {
    name: "Other",
    transactions: []
  }
};

// displayAllByCategory();

addTransaction(expense.food, {
  info: "Açaí bowls with CE & CV",
  price: 9.62,
  date: new Date(2018, 6, 29), // July 29
  id: 47
});

addTransaction(expense.food, {
  info: "GN's birthday dinner",
  price: 21.99,
  date: new Date(2018, 6, 28), // July 28
  id: 48
});

addTransaction(expense.food, {
  info: "Lemonade",
  price: 2.72,
  date: new Date(2018, 6, 9), // July 9
  id: 49
});

// displayCategory(expense.food);

// var mochaCoffee1 = findTransaction(expense.food.transactions, 1);
// console.log("Mocha coffee 1:", dateFns.format(mochaCoffee1.date, "M/D/YYYY"));

// var mochaCoffee2 = findTransaction(expense.food.transactions, 2);
// console.log("Mocha coffee 2:", dateFns.format(mochaCoffee2.date, "M/D/YYYY"));

// sortCategoryByDate(expense.food);

// displayCategory(expense.entertainment);

// var sorted = sortCategoryByDate(expense.food);
// console.log(sorted);

console.log(
  newDisplayCategory(
    expense,
    dateFns.startOfMonth(new Date()),
    dateFns.endOfMonth(new Date())
  )
);

/*  Notes:
 *  I need to fix the price so it comes out always to the second decimal place, even with trailing zeros
 *
 */
