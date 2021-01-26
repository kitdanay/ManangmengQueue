<?php

session_start();
session_destroy();
    require_once("connection.php");
    $query = "update tablemantraplan set TableStatus='1', UserRecord='' where UserRecord='$_SESSION[Username]' ";
    $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));

        unset($_SESSION['UserID']);
        unset($_SESSION['User']);
        unset($_SESSION['Userlevel']);
        unset($_SESSION["UserResName"]);  
        unset($_SESSION['ResName']);
        unset($_SESSION['ZoneName']);
        unset($_SESSION['SelectDate']);
        unset($_SESSION['SelectTime']);
        unset($_SESSION["Username"]);
        unset($_SESSION["shopping_cart"]);  
        unset($_SESSION["MoveTable"]); 
        unset($_SESSION["GetDeleteTable"]); 
        unset($_SESSION["GetChangeIcon"]);
        unset($_SESSION["GetNewTable"]); 

        header("Location: index.html");	
?>