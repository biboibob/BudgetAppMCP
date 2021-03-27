<!DOCTYPE html>
<html>
<head>
<title>MC Payment</title>
<link rel="stylesheet" href="Asset/CSS/home.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<?php include 'Asset/PHP/HomeData.php' ?>
</head>
<body>

	<div class="sidebar">
		<div class="sidebar-header">
			<div class="sidebar-title">
				MC Payment
			</div>
			<div class="hamburger">
				<i class="fa fa-bars fa-2x"></i>
			</div>
		</div>

		<a href="Home.php" class="menu homeSideBar"><i class="fa fa-home sideIcon"></i> Home</a>
		<button class="dropdown-btn" id="subMenu"><i class="fas fa-chart-bar sideIcon"></i> <span>Statistic</span> 
	</i>
		</button>
		<div class="dropdown-container">
			<a href="Income.php" class="menu incomeSideBar">Income</a>
			<a href="Expense.php" class="menu expenseSideBar">Expenses</a>
		</div>

	</div>
	  
	<div class="content">
		<div class="head-content">
			<div class="title-content">
				<i class="fas fa-grip-lines"></i> <span>Home</span>
			</div>
			<div class="title-bar">
				<i class="fas fa-info-circle"></i>
			</div>
		</div>

		<div class="content-1">
			<div class="balance-info">
				<div class="current-balance">
					$ Balance<span>Rp20.000.000</span>
				</div>

				<div class="table-set">
					<table class="income-table">
						<tbody>
						<?php  while($row = mysqli_fetch_array($result)) { ?>
							<tr>
								<td data-th="Movie Title"><?php echo $row['type_transaction']?></td>
								<td data-th="Genre"><?php echo $row['date']?></td>
								<td data-th="Year"><?php echo $row['nominal']?></td>
							</tr>
						
						<?php } ?>
						</tbody>
					</table>
				</div>
				
			</div>
			<div class="inout-info">
				Income
				<div class="incometotal-balance">
					<i class="fas fa-arrow-up fa-2x"></i>
					
					<div>
						<span>Rp20.000.000</span>
						<p>Higher than last month</p>
					</div>
				</div>

				Expenses
				<div class="expensetotal-balance">
					<i class="fas fa-arrow-down fa-2x"></i>
					
					<div>
						<span>Rp10.000.000</span>
						<p>Lower than last month</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>


<script>

	
</script>

