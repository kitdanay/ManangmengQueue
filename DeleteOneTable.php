<?php session_start();?>
<?php
    require_once("connection.php");
    require_once("Include/EncodeDecode.php");

    if(isset($_GET['action']) and $_GET['action'] == 'DeleteOneTable'){
   
    $BookingID = base64url_decode($_SESSION["GetDeleteTable"]);
    
	$sql = "DELETE FROM bookingres ";
	$sql .="WHERE BookingID = '".$BookingID."' ";
    $result = mysqli_query($conn, $sql) ;
    
    unset($_SESSION["GetDeleteTable"]);       
    
         header("location:$_SESSION[ZoneName].php");
    }

?>