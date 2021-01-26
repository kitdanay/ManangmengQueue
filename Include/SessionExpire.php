<?php
        $now = time(); 
        if ($now > $_SESSION['expire']) {
            unset($_SESSION["shopping_cart"]);
            unset($_SESSION["MoveTable"]); 
            unset($_SESSION["GetDeleteTable"]); 
            unset($_SESSION["GetChangeIcon"]);
            
            require_once("connection.php");
            $query = "update tablemantraplan set TableStatus='1', UserRecord='' where UserRecord='$_SESSION[Username]' ";
            $Recordset1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
        }
?>