<?php
require_once("connection.php");
        $sql2 = "UPDATE bookingres SET " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE BookingID = '".$_POST["BookingID"]."' ";
	    $query2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
?>