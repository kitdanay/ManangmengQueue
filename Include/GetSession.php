<?php session_start();?>
<?php 

$_SESSION["ZoneName"] = $_GET["ZoneName"]; 
header("location:../$_SESSION[ZoneName].php");

?>