<?php session_start();?>
<?php

if(isset($_GET["BookingID"]))  
 {  
    $_SESSION["GetDeleteTable"] = $_GET["BookingID"];
    $_SESSION["TableID"] = $_GET["TableID"];
    
    unset($_SESSION["GetChangeIcon"]);
    unset($_SESSION["MoveTable"]); 
    unset($_SESSION["GetNewTable"]); 
    
    header("location:../$_SESSION[ZoneName].php");
}
 ?>