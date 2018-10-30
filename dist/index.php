<?php include('../includes/database.php'); ?>
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

	<p>
		I am writing a spending tracker app. I am currently setting up the MVP.
	</p>
	<p>
		Next up is setting up the database. Below is static content, not yet connected to a database.
	</p>

	<h2>Income</h2>
	<div>
		<h3>Salary</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Salary--Info</td>
				<td>--Salary--Price</td>
				<td>--Salary--Date</td>
				<td>--Salary--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Cash Back</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--CashBack--Info</td>
				<td>--CashBack--Price</td>
				<td>--CashBack--Date</td>
				<td>--CashBack--Notes</td>
			</tr>
		</table>
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

	<h2>Expense</h2>

	<div>
		<h3>Food</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Food--Info</td>
				<td>--Food--Price</td>
				<td>--Food--Date</td>
				<td>--Food--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Transportation</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Transportation--Info</td>
				<td>--Transportation--Price</td>
				<td>--Transportation--Date</td>
				<td>--Transportation--Notes</td>
			</tr>
		</table>
	</div>

	<div>
		<h3>Trips</h3>
		<table>
			<tr>
				<th>Info</th>
				<th>Price</th>
				<th>Date</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>--Trips--Info</td>
				<td>--Trips--Price</td>
				<td>--Trips--Date</td>
				<td>--Trips--Notes</td>
			</tr>
		</table>
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