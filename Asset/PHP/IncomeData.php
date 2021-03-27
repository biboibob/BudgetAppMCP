<?php

include 'connection.php';

$sql="SELECT * FROM transaction WHERE type_transaction='Income'";
$result = mysqli_query($con,$sql);

$sql="SELECT min(nominal)as min, max(nominal)as max, count('id')as payment FROM transaction WHERE type_transaction='Income'";
$resultMinMax = mysqli_query($con,$sql);


?>
