<?php include('../includes/database.php'); ?>
<?php 
	$queryIncomeSalary = "SELECT * FROM `income_salary`
							ORDER BY date";
	$resultIncomeSalary = $mysqli->query($queryIncomeSalary) or die($mysqli->error.__LINE__);

	$queryIncomeCashBack = "SELECT * FROM `income_cash_back`
							ORDER BY date";
	$resultIncomeCashBack = $mysqli->query($queryIncomeCashBack) or die($mysqli->error.__LINE__);

	$queryIncomeGifts = "SELECT * FROM `income_gifts`
						ORDER BY date";
	$resultIncomeGifts = $mysqli->query($queryIncomeGifts) or die($mysqli->error.__LINE__);

	$queryIncomeOther = "SELECT * FROM `income_other`
						ORDER BY date";
	$resultIncomeOther = $mysqli->query($queryIncomeOther) or die($mysqli->error.__LINE__);

	$queryExpenseFood = "SELECT * FROM `expense_food`
						ORDER BY date";
	$resultExpenseFood = $mysqli->query($queryExpenseFood) or die($mysqli->error.__LINE__);

	$queryExpenseTransportation = "SELECT * FROM `expense_transportation`
									ORDER BY date";
	$resultExpenseTransportation = $mysqli->query($queryExpenseTransportation) or die($mysqli->error.__LINE__);

	$queryExpenseTrips = "SELECT * FROM `expense_trips`
							ORDER BY date";
	$resultExpenseTrips = $mysqli->query($queryExpenseTrips) or die($mysqli->error.__LINE__);

	$queryExpenseGifts = "SELECT * FROM `expense_gifts`
							ORDER BY date";
	$resultExpenseGifts = $mysqli->query($queryExpenseGifts) or die($mysqli->error.__LINE__);

	$queryExpenseHealth = "SELECT * FROM `expense_health`
							ORDER BY date";
	$resultExpenseHealth = $mysqli->query($queryExpenseHealth) or die($mysqli->error.__LINE__);

	$queryExpenseBeauty = "SELECT * FROM `expense_beauty`
							ORDER BY date";
	$resultExpenseBeauty = $mysqli->query($queryExpenseBeauty) or die($mysqli->error.__LINE__);

	$queryExpenseRecreationalActivities = "SELECT * FROM `expense_recreational_activities`
											ORDER BY date";
	$resultExpenseRecreationalActivities = $mysqli->query($queryExpenseRecreationalActivities) or die($mysqli->error.__LINE__);

	$queryExpenseShopping = "SELECT * FROM `expense_shopping`
								ORDER BY date";
	$resultExpenseShopping = $mysqli->query($queryExpenseShopping) or die($mysqli->error.__LINE__);

	$queryExpenseSports = "SELECT * FROM `expense_sports`
							ORDER BY date";
	$resultExpenseSports = $mysqli->query($queryExpenseSports) or die($mysqli->error.__LINE__);

	$queryExpensePets = "SELECT * FROM `expense_pets`
							ORDER BY date";
	$resultExpensePets = $mysqli->query($queryExpensePets) or die($mysqli->error.__LINE__);

	$queryExpenseEducation = "SELECT * FROM `expense_education`
								ORDER BY date";
	$resultExpenseEducation = $mysqli->query($queryExpenseEducation) or die($mysqli->error.__LINE__);

	$queryExpenseEntertainment = "SELECT * FROM `expense_entertainment`
									ORDER BY date";
	$resultExpenseEntertainment = $mysqli->query($queryExpenseEntertainment) or die($mysqli->error.__LINE__);

	$queryExpenseWork = "SELECT * FROM `expense_work`
							ORDER BY date";
	$resultExpenseWork = $mysqli->query($queryExpenseWork) or die($mysqli->error.__LINE__);

	$queryExpenseOther = "SELECT * FROM `expense_other`
							ORDER BY date";
	$resultExpenseOther = $mysqli->query($queryExpenseOther) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Thrift - A Spending Tracker</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- import the webpage's stylesheet -->
	<link rel="stylesheet" href="../style.css">

</head>

<body>
	<div class="container">
	<h1>Thrift</h1>

	<p>I am writing a spending tracker app. I am currently setting up the MVP.</p>

	<h2>Income</h2>
	<div>
		<h3>Salary</h3>
		<?php
			if($resultIncomeSalary->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultIncomeSalary->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Cash Back</h3>
		<?php
			if($resultIncomeCashBack->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultIncomeCashBack->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Gifts</h3>
		<?php
			if($resultIncomeGifts->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultIncomeGifts->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Other</h3>
		<?php
			if($resultIncomeOther->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultIncomeOther->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<h2>Expense</h2>

	<div>
		<h3>Food</h3>
		<?php
			if($resultExpenseFood->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseFood->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Transportation</h3>
		<?php
			if($resultExpenseTransportation->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseTransportation->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Trips</h3>
		<?php
			if($resultExpenseTrips->num_rows > 0) {
				echo '<table class="transactions-table">';				
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseTrips->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Gifts</h3>
		<?php
			if($resultExpenseGifts->num_rows > 0) {
				echo '<table class="transactions-table">';				
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseGifts->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Health</h3>
		<?php
			if($resultExpenseHealth->num_rows > 0) {
				echo '<table class="transactions-table">';				
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseHealth->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Beauty</h3>
		<?php
			if($resultExpenseBeauty->num_rows > 0) {
				echo '<table class="transactions-table">';				
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseBeauty->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Recreational Activities</h3>
		<?php
			if($resultExpenseRecreationalActivities->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseRecreationalActivities->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Shopping</h3>
		<?php
			if($resultExpenseShopping->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseShopping->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Sports</h3>
		<?php
			if($resultExpenseSports->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseSports->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Pets</h3>
		<?php
			if($resultExpensePets->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpensePets->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Education</h3>
		<?php
			if($resultExpenseEducation->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseEducation->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Entertainment</h3>
		<?php
			if($resultExpenseEntertainment->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseEntertainment->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Work</h3>
		<?php
			if($resultExpenseWork->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseWork->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<div>
		<h3>Other</h3>
		<?php
			if($resultExpenseOther->num_rows > 0) {
				echo '<table class="transactions-table">';
				$header = '<tr>';
				$header .= '<th>Info</th>';
				$header .= '<th>Price</th>';
				$header .= '<th>Date</th>';
				$header .= '<th>Notes</th>';
				$header .= '</tr>';
				echo $header;

				while($row = $resultExpenseOther->fetch_assoc()) {
					$output = '<tr>';
					$output .= '<td>'.stripslashes($row['item']).'</td>';
					$output .= '<td>'.stripslashes($row['price']).'</td>';
					$output .= '<td>'.stripslashes($row['date']).'</td>';
					$output .= '<td>'.stripslashes($row['note']).'</td>';
					$output .= '</tr>';
					echo $output;
				}

				echo '</table>';
			} else {
				echo '<p>There are no transactions in this category</p>';
			}
		?>
	</div>

	<!-- import the webpage's javascript file -->
	<script src="main.js" defer></script>
	</div>
</body>

</html>