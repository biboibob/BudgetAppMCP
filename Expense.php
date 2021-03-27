<!DOCTYPE html>
<html>
<head>
<title>MC Payment</title>
<link rel="stylesheet" href="Asset/CSS/expense/expense.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<?php include 'Asset/PHP/ExpenseData.php' ?>
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
				<i class="fas fa-grip-lines"></i> <span>Expense</span>
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

                
            </div>
            <div class="graph-info">
              
            </div>
            <div class="status">
               
            </div>
        </div>
        <div class="content-2">
            <div class="table-set">
                <table class="income-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Company</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Nominal</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php

                $i = 0;
                while($row = mysqli_fetch_array($result)) {
                    $i++; ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['company_name'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td>Rp<?php echo $row['nominal'] ?></td>
                    </tr>
                <?php  } ?>
                
                    </tbody>
                </table>
            </div>
        </div>
		
	</div>

</body>
</html>


<script>
	
	
</script>