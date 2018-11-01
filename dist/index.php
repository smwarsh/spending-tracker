<?php include('../includes/database.php'); ?>
<?php 
	$queryIncomeSalary = "SELECT * FROM `income_salary`";
	$resultIncomeSalary = $mysqli->query($queryIncomeSalary) or die($mysqli->error.__LINE__);

	$queryIncomeCashBack = "SELECT * FROM `income_cash_back`";
	$resultIncomeCashBack = $mysqli->query($queryIncomeCashBack) or die($mysqli->error.__LINE__);

	$queryIncomeGifts = "SELECT * FROM `income_gifts`";
	$resultIncomeGifts = $mysqli->query($queryIncomeGifts) or die($mysqli->error.__LINE__);

	$queryIncomeOther = "SELECT * FROM `income_other`";
	$resultIncomeOther = $mysqli->query($queryIncomeOther) or die($mysqli->error.__LINE__);

	$queryExpenseFood = "SELECT * FROM `expense_food`";
	$resultExpenseFood = $mysqli->query($queryExpenseFood) or die($mysqli->error.__LINE__);

	$queryExpenseTransportation = "SELECT * FROM `expense_transportation`";
	$resultExpenseTransportation = $mysqli->query($queryExpenseTransportation) or die($mysqli->error.__LINE__);

	$queryExpenseTrips = "SELECT * FROM `expense_trips`";
	$resultExpenseTrips = $mysqli->query($queryExpenseTrips) or die($mysqli->error.__LINE__);
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
	<h1>Thrift</h1>

	<p>I am writing a spending tracker app. I am currently setting up the MVP.</p>

	<p>I have just connected the site to the database and I am in the process of changing the static content below into database information.</p>

	<h2>Income</h2>
	<div>
		<h3>Salary</h3>
		<?php
			if($resultIncomeSalary->num_rows > 0) {
				$header = '<table>';
				$header .= '<tr>';
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
				$header = '<table>';
				$header .= '<tr>';
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
				$header = '<table>';
				$header .= '<tr>';
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
				$header = '<table>';
				$header .= '<tr>';
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
				$header = '<table>';
				$header .= '<tr>';
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
				$header = '<table>';
				$header .= '<tr>';
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
				$header = '<table>';
				$header .= '<tr>';
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
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Gifts--Info</td>
				<td>--Gifts--Price</td>
				<td>--Gifts--Date</td>
				<td>--Gifts--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Health</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Health--Info</td>
				<td>--Health--Price</td>
				<td>--Health--Date</td>
				<td>--Health--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Beauty</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Beauty--Info</td>
				<td>--Beauty--Price</td>
				<td>--Beauty--Date</td>
				<td>--Beauty--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Recreational Activities</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--RecreationalActivities--Info</td>
				<td>--RecreationalActivities--Price</td>
				<td>--RecreationalActivities--Date</td>
				<td>--RecreationalActivities--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Shopping</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Shopping--Info</td>
				<td>--Shopping--Price</td>
				<td>--Shopping--Date</td>
				<td>--Shopping--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Sports</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Sports--Info</td>
				<td>--Sports--Price</td>
				<td>--Sports--Date</td>
				<td>--Sports--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Pets</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Pets--Info</td>
				<td>--Pets--Price</td>
				<td>--Pets--Date</td>
				<td>--Pets--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Education</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Education--Info</td>
				<td>--Education--Price</td>
				<td>--Education--Date</td>
				<td>--Education--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Entertainment</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Entertainment--Info</td>
				<td>--Entertainment--Price</td>
				<td>--Entertainment--Date</td>
				<td>--Entertainment--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Work</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Work--Info</td>
				<td>--Work--Price</td>
				<td>--Work--Date</td>
				<td>--Work--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Other</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Other--Info</td>
				<td>--Other--Price</td>
				<td>--Other--Date</td>
				<td>--Other--Notes</td>
			</tr>
		</table>
	</div>

	<!-- import the webpage's javascript file -->
	<script src="main.js" defer></script>
</body>

</html>