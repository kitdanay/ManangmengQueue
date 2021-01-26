<?php    
    require_once("connection.php");
    $query = "update tablemantraplan set TableStatus='1', UserRecord='' where UserRecord='$_SESSION[Username]' ";
    $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));

    unset($_SESSION["shopping_cart"]);  
    unset($_SESSION["MoveTable"]); 
    unset($_SESSION["GetDeleteTable"]); 
    unset($_SESSION["GetChangeIcon"]);
    unset($_SESSION["GetNewTable"]); 
    unset($_SESSION["SelectDate"]); 
    unset($_SESSION["SelectTime"]); 
    
    echo "<script>window.close();</script>";
?>