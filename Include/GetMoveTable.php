<?php session_start();?>
<?php

if(isset($_GET["BookingID"]))  
 {  
    $_SESSION["MoveTable"] = $_GET["BookingID"];
    $_SESSION["TableID"] = $_GET["TableID"];
    $_SESSION["GuestID"] = $_GET["GuestID"];
    
    unset($_SESSION["GetChangeIcon"]);
    unset($_SESSION["GetDeleteTable"]); 
    unset($_SESSION["GetNewTable"]);
    
    header("location:../$_SESSION[ZoneName].php");
}
 ?>