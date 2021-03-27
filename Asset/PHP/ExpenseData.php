<?php

include 'connection.php';

$sql="SELECT * FROM transaction WHERE type_transaction='Credit'";
$result = mysqli_query($con,$sql);


?>
