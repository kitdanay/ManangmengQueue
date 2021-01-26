<?php
require_once("connection.php");

	$sql = "UPDATE guest SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE GuestID = '".$_POST["GuestID"]."' ";
	$query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    
    $sql2 = "UPDATE bookingres SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE GuestID = '".$_POST["GuestID"]."' ";
    $query2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));

?>