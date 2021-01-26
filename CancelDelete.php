<?php session_start();?>
<?php
    require_once("connection.php");
    require_once("Include/EncodeDecode.php");
    
    if(isset($_GET['action']) and $_GET['action'] == 'CancelDelete'){
        
        unset($_SESSION["GetDeleteTable"]);
        unset($_SESSION["GetChangeIcon"]);
              
         header("location:$_SESSION[ZoneName].php");
    }
?>